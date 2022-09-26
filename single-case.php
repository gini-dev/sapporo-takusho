<?php get_header('service'); ?>
<?php
	$terms = get_the_terms($post->ID,'casecategory');
	foreach( $terms as $term ) {
		$termid = $term->term_id;
		$termname = $term->name;
		$termslug = $term->slug;
	}

	for($i = 1;$i <= 10;$i++){
		if(get_field('title'.$i)){
			$blockarr[$i]['title'] = get_field('title'.$i);
			$blockarr[$i]['before'] = get_field('before_img'.$i);
			$blockarr[$i]['after'] = get_field('after_img'.$i);
			$blockarr[$i]['caption'] = get_field('caption'.$i);
		}
	}
	$size = 'case_ba';
//	var_dump(count($blockarr));

?>
	<main role="main">
		<!-- l-page_content -->
		<section class="l-page_content">

			<div class="l-page_head">
				<div class="l-page_head__inner">
					<h2 class="p-heading_lv1">リフォーム事例紹介</h2>
				</div>
				<div class="topic_path">
					<ul>
						<li><a href="<?php echo home_url('/service/'); ?>">TOP</a></li>
						<li><a href="<?php echo home_url('/service/reform/'); ?>">リフォーム</a></li>
						<li><a href="<?php echo home_url('/service/reform/case/'); ?>">リフォーム事例紹介</a></li>
						<li>
							<?php
								if(mb_strlen($post->post_title, 'UTF-8')>10){
									$title= mb_substr($post->post_title, 0, 10, 'UTF-8');
									echo $title.'…';
								}else{
									echo $post->post_title;
								}
							?>
						</li>
					</ul>
				</div>
			</div>

			<section class="l-page_section">
				<div class="l-page_section__inner">
					<div class="l-column_container">
						<div class="l-primary_column">
							<article class="p-post_detail">
								<div class="p-post_detail__head">
									<div class="category <?php print $termslug; ?>"><a href="<?php print get_term_link($termslug, 'casecategory'); ?>"><?php print $termname; ?></a></div>
									<h1 class="title"><span><?php the_title(); ?></span></h1>
									<div class="meta">
										<time class="date"><?php the_time("Y.m.d"); ?></time>
									</div>
								</div>
								<div class="p-post_detail__content">
									<?php if (has_post_thumbnail()) : ?>
										<div class="eyecatch-img"><?php the_post_thumbnail(); ?></div>
									<?php endif; ?>
									<div class="case-blo-out">
									<?php if(!empty($blockarr)):foreach($blockarr as $value): ?>
										<div class="blo">
											<h3><?php print $value['title'] ?></h3>
											<div class="case-flex">
												<div>
													<div class="case-title-edit">BEFORE</div>
													<?php print wp_get_attachment_image($value['before'],$size); ?>
												</div>
												<div>
													<div class="case-title-edit">AFTER</div>
													<?php print wp_get_attachment_image($value['after'],$size); ?>
												</div>
											</div>
											<?php if(!empty($value['caption'])): ?>
											<p class="cap-p">
												<?php print $value['caption']; ?>
											</p>
											<?php endif; ?>
										</div>
									<?php endforeach;endif; ?>

									</div>
									<?php if(have_posts()):while(have_posts()):the_post(); ?>
										<?php the_content(); ?>
									<?php endwhile;endif; ?>
								</div>
<?php
$prev_url = twpp_get_adjacent_post_url( true );
$next_url = twpp_get_adjacent_post_url( false );
?>
								<div class="p-pager">
									<ul class="p-pager__list">
										<li class="p-pager__prev <?php if(!$prev_url){print 'disable';} ?>"><a href="<?php print $prev_url; ?>"><i class="p-icon--arrow_l_01"></i><span>前の記事へ</span></a></li>
										<li class="p-pager__item"><a href="<?php echo home_url('/service/reform/case/'); ?>">リフォーム事例紹介一覧</a></li>
										<li class="p-pager__next <?php if(!$next_url){print 'disable';} ?>"><a href="<?php print $next_url; ?>"><span>次の記事へ</span><i class="p-icon--arrow_r_01"></i></a></li>
									</ul>
								</div>
							</article>
						</div>
						<?php get_sidebar('case'); ?>
					</div>
				</div>
			</section>

		</section>
		<!-- //l-page_content -->
	</main>

<?php get_footer('service'); ?>