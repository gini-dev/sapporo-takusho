<?php get_header('service'); ?>
<?php
$terms = get_the_terms($post->ID,'voicecategory');
foreach( $terms as $term ) {
	$termid = $term->term_id;
	$termname = $term->name;
	$termslug = $term->slug;
}
?>

	<main role="main">
		<!-- l-page_content -->
		<section class="l-page_content">

			<div class="l-page_head">
				<div class="l-page_head__inner">
					<h2 class="p-heading_lv1">感動エピソード紹介</h2>
				</div>
				<div class="topic_path">
					<ul>
						<li><a href="<?php echo home_url('/service/'); ?>">TOP</a></li>
						<li><a href="<?php echo home_url('/service/voice/'); ?>">感動エピソード紹介</a></li>
						<li><a href="<?php print get_term_link($termslug, 'voicecategory'); ?>"><?php print $termname; ?></a></li>
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
									<div class="category <?php print $termslug; ?>"><a href="<?php print get_term_link($termslug, 'voicecategory'); ?>"><?php print $termname; ?></a></div>
									<h1 class="title"><span><?php the_title(); ?></span></h1>
									<div class="meta">
										<div class="name"><?php print get_field('customer'); ?></div>
									</div>
									<div class="profile">
										<dl class="profile__name">
											<dt>担当社員</dt>
											<dd><?php print get_field('staff')['name']; ?></dd>
										</dl>
										<figure class="profile__photo">
											<span class="<?php print $termslug; ?>"><?php print wp_get_attachment_image(get_field('staff')['image'],'thumbnail'); ?></span>
											<figcaption><?php print get_field('staff')['position']; ?></figcaption>
										</figure>
										<p class="profile__text"><?php print get_field('staff')['profile']; ?></p>
									</div>
								</div>
								<div class="p-post_detail__content">
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
										<li class="p-pager__item"><a href="<?php echo home_url('/service/voice/'); ?>">感動エピソード紹介一覧</a></li>
										<li class="p-pager__next <?php if(!$next_url){print 'disable';} ?>"><a href="<?php print $next_url; ?>"><span>次の記事へ</span><i class="p-icon--arrow_r_01"></i></a></li>
									</ul>
								</div>
							</article>
						</div>
						<div class="l-secondary_column">
							<div class="c-widget">
								<h3 class="c-widget__title"><span>CATEGORY</span></h3>
								<ul class="category_list">
									<?php
									    $cats = wp_list_categories('echo=0&show_count=1&title_li=&taxonomy=voicecategory');
									    $cats = preg_replace('/ title=\"(.*?)\"/','', $cats);
									    $cats = preg_replace('/ class=\"(.*?)\"/','', $cats);
									    $cats = preg_replace('/<\/a> (\([0-9]*\))/', ' $1</a>', $cats);
									    echo $cats;
									?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>

		</section>
		<!-- //l-page_content -->
	</main>

<?php get_footer('service'); ?>