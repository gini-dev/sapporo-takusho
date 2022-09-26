<?php
/*
Template Name: Archive-Company
*/
?>
<?php get_header('company'); ?>
<div class="txt-mv report-mv rel">
	<h1 class="page-title mont">Report</h1>
	<div class="page-title-ja">社内活動報告</div>
</div><!-- /.txt-mv -->

<?php
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$category = get_queried_object();
	$cat_slug = $category->slug;
	$year = get_query_var('year');
	$monthnum = get_query_var('monthnum');
	if(!$cat_slug){
		$cat_slug = "company";
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

<div class="report-archive single-page rel">
	<div class="inner">
		<div class="child-page-contents flex flexstart rel">
			<div class="child-main">
				<ul class="report-list flex jc-start">
<?php
	if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();
	$cat = get_the_category();
	$cat_name = $cat[0]->cat_name;
?>
					<li><a href="<?php print get_permalink( ); ?>" class="flex jc-start">
						<div class="img">
							<?php if (has_post_thumbnail()) : ?>
								<?php the_post_thumbnail(); ?>
							<?php else: ?>
								<img src="<?php echo get_template_directory_uri(); ?>/images/common/report-no-image.jpg" alt="report-no-image">
							<?php endif; ?>
						</div>
						<div class="txt">
							<time class="mont"><?php the_time("Y.m.d"); ?></time>
							<div class="cate"><?php print $cat_name; ?></div>
							<h3>
								<?php
									if(mb_strlen($post->post_title, 'UTF-8')>25){
										$title= mb_substr($post->post_title, 0, 25, 'UTF-8');
										echo $title.'…';
									}else{
										echo $post->post_title;
									}
								?>
							</h3>
							<p><?php the_excerpt(); ?></p>
						</div>
					</a></li>
<?php endwhile; ?>
				</ul>
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
			</div><!-- /.child-main -->
			<?php get_sidebar('report'); ?>
		</div><!-- /.child-page-contents -->
	</div><!-- /.inner -->
</div><!-- /.child-page -->
<?php get_footer('company'); ?>