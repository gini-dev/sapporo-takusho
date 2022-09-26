<?php get_header('service'); ?>
<?php
	$queried_object = get_queried_object();
	$termname = $queried_object->name;
	$termslug = $queried_object->slug;
?>
	<main role="main">
		<!-- l-page_content -->
		<section class="l-page_content">

			<div class="l-page_head">
				<div class="l-page_head__inner reform">
					<h2 class="p-heading_lv1">リフォーム事例紹介</h2>
				</div>
				<div class="topic_path">
					<ul>
						<li><a href="<?php echo home_url('/service/'); ?>">TOP</a></li>
						<li><a href="<?php echo home_url('/service/reform/'); ?>">リフォーム</a></li>
						<li>リフォーム事例紹介</li>
					</ul>
				</div>
			</div>
<?php
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$args = array(
		'post_type' => 'case',
		'post_status' => 'publish',
		'orderby' => 'post_date',
		'order' => 'DESC',
		'posts_per_page' => 15,
		'paged' => $paged,
		'tax_query' => array(
			array(
				'taxonomy' => 'casecategory',
				'field' => 'slug',
				'terms' => $termslug,
			),
		)
	);
	$wp_query->query($args);
?>

			<section class="l-page_section">
				<div class="l-page_section__inner">

					<div class="l-column_container">
						<div class="l-primary_column">
							<div class="p-page_case__list">
<?php
	if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();
	$terms = get_the_terms($post->ID, 'casecategory');
?>
								<article class="p-page_case__item js-animateblock">
									<a href="<?php print get_permalink( ); ?>">
										<div class="thumb">
											<?php if (has_post_thumbnail()) : ?>
												<?php the_post_thumbnail(); ?>
											<?php else: ?>
												<img src="<?php echo get_template_directory_uri(); ?>/assets/img/reform/case/dummy_01.jpg" alt="">
											<?php endif; ?>
										</div>
										<div class="content">
											<div class="category"><?php echo esc_html($terms[0]->name); ?></div>
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
											<time class="date"><?php the_time("Y.m.d"); ?></time>
										</div>
									</a>
								</article>
<?php endwhile; ?>
							</div>
<?php
	if(function_exists('wp_pagenavi')):
?>
							<div class="p-pagination reform">
								<?php wp_pagenavi(); ?>
							</div>
<?php
	endif;endif;
	wp_reset_query();
?>
						</div>
						<?php get_sidebar('case'); ?>
					</div>

				</div>
			</section>

		</section>
		<!-- //l-page_content -->
	</main>

<?php get_footer('service'); ?>