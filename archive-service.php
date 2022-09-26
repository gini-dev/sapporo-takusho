<?php
/*
Template Name: Archive-Service
*/
?>
<?php get_header('service'); ?>
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
						<li>ニュース＆トピックス</li>
					</ul>
				</div>
			</div>
<?php
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$category = get_queried_object();
	$cat_slug = $category->slug;
	$year = get_query_var('year');
	$monthnum = get_query_var('monthnum');
	if(!$cat_slug){
		$cat_slug = "service";
	}
	$args = array(
		'post_type' => 'post',
		'post_status' => 'publish',
		'orderby' => 'post_date',
		'order' => 'DESC',
		'posts_per_page' => 10,
		'category_name' => $cat_slug,
		'year' => $year,
		'monthnum' => $monthnum,
		'paged' => $paged
	);
	$wp_query->query($args);
?>

			<section class="l-page_section">
				<div class="l-page_section__inner">

					<div class="l-column_container">
						<div class="l-primary_column">
							<div class="p-page_news__list">
<?php
	if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();
	$cat = get_the_category();
//	var_dump($cat);
	$catchild = get_the_category($cat[0]);
	$cat_name = $cat[0]->cat_name;
//	var_dump($cat);
	if($catchild){
		$cat_name = $catchild[0]->cat_name;
	}
?>
								<article class="p-page_news__item js-animateblock">
									<a href="<?php print get_permalink( ); ?>">
										<div class="thumb">
											<?php if (has_post_thumbnail()) : ?>
												<?php the_post_thumbnail(); ?>
											<?php else: ?>
												<img src="<?php echo get_template_directory_uri(); ?>/assets/img/reform/case/dummy_01.jpg" alt="">
											<?php endif; ?>
										</div>
										<div class="content">
											<div class="meta">
												<time class="date"><?php the_time("Y.m.d"); ?></time>
												<div class="category"><?php print $cat_name; ?></div>
											</div>
											<div class="title">
												<?php
													if(mb_strlen($post->post_title, 'UTF-8')>25){
														$title= mb_substr($post->post_title, 0, 25, 'UTF-8');
														echo $title.'…';
													}else{
														echo $post->post_title;
													}
												?>
											</div>
											<div class="text">
												<p><?php the_excerpt(); ?></p>
											</div>
										</div>
									</a>
								</article>
<?php endwhile; ?>
							</div>
<?php
	if(function_exists('wp_pagenavi')):
?>
							<div class="p-pagination">
								<?php wp_pagenavi(); ?>
							</div>
<?php
	endif;endif;
	wp_reset_query();
?>
						</div>
						<?php get_sidebar('news'); ?>
					</div>

				</div>
			</section>

		</section>
		<!-- //l-page_content -->
	</main>

<?php get_footer('service'); ?>