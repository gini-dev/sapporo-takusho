<?php get_header('service'); ?>
<?php
	$category = get_the_category();
	$cat = $category[0];
	$cat_name = $cat->name;
	$cat_id = $cat->cat_ID;
	$cat_slug = $cat->slug;
?>
	<main role="main">
		<!-- l-page_content -->
		<section class="l-page_content">

			<div class="l-page_head">
				<div class="l-page_head__inner">
					<h2 class="p-heading_lv1">ニュース＆トピックス</h2>
				</div>
				<div class="topic_path">
					<ul>
						<li><a href="<?php echo home_url('/service/'); ?>">TOP</a></li>
						<li><a href="<?php echo home_url('/service/news/'); ?>">ニュース＆トピックス</a></li>
						<li><a href="<?php echo home_url('/category/service/').$cat_slug.'/'; ?>"><?php print $cat_name; ?></a></li>
						<li><?php the_title(); ?></li>
					</ul>
				</div>
			</div>

			<section class="l-page_section">
				<div class="l-page_section__inner">
					<div class="l-column_container">
						<div class="l-primary_column">
							<article class="p-post_detail">
								<div class="p-post_detail__head">
									<div class="category"><a href="<?php echo home_url('/category/service/').$cat_slug.'/'; ?>"><?php print $cat_name; ?></a></div>
									<h1 class="title"><span><?php the_title(); ?></span></h1>
									<div class="meta">
										<time class="date"><?php the_time("Y.m.d"); ?></time>
									</div>
								</div>
								<div class="p-post_detail__content">
									<?php if (has_post_thumbnail()) : ?>
										<?php the_post_thumbnail(); ?>
									<?php endif; ?>
									<?php if(have_posts()):while(have_posts()):the_post(); ?>
										<?php the_content(); ?>
									<?php endwhile;endif; ?>
								</div>
<?php
$prev_url = twpp_get_adjacent_post_url2( true );
$next_url = twpp_get_adjacent_post_url2( false );
?>
								<div class="p-pager">
									<ul class="p-pager__list">
										<li class="p-pager__prev <?php if(!$prev_url){print 'disable';} ?>"><a href="<?php print $prev_url; ?>"><i class="p-icon--arrow_l_01"></i><span>前の記事へ</span></a></li>
										<li class="p-pager__item"><a href="<?php echo home_url('/service/news/'); ?>">ニュース&トピックス一覧</a></li>
										<li class="p-pager__next <?php if(!$next_url){print 'disable';} ?>"><a href="<?php print $next_url; ?>"><span>次の記事へ</span><i class="p-icon--arrow_r_01"></i></a></li>
									</ul>
								</div>
							</article>
						</div>
						<?php get_sidebar('news'); ?>
					</div>
				</div>
			</section>

		</section>
		<!-- //l-page_content -->
	</main>

<?php get_footer('service'); ?>