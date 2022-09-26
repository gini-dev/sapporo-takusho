<?php get_header('company'); ?>
<?php get_template_part( 'company/soon'); ?>
<?php get_footer('company'); ?>

<?php /* ?>

<?php get_header('company'); ?>
<div class="txt-mv rel">
	<h1 class="page-title mont">Blog</h1>
	<div class="page-title-ja">スタッフブログ</div>
</div><!-- /.txt-mv -->

<?php
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$year = get_query_var('year');
	$monthnum = get_query_var('monthnum');
	$args = array(
		'post_type' => 'blog',
		'post_status' => 'publish',
		'orderby' => 'post_date',
		'order' => 'DESC',
		'posts_per_page' => 15,
		'year' => $year,
		'monthnum' => $monthnum,
		'paged' => $paged
	);
	$wp_query->query($args);
?>

<div class="blog-archive single-page rel">
	<div class="inner">
		<div class="child-page-contents flex flexstart rel">
			<div class="child-main">
				<ul class="blog-list flex jc-start">
<?php
	if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();
	$terms = get_the_terms($post->ID, 'blogcategory');
?>
					<li><a href="<?php print get_permalink( ); ?>">
						<div class="img">
							<?php if (has_post_thumbnail()) : ?>
								<?php the_post_thumbnail(); ?>
							<?php else: ?>
								<img src="<?php echo get_template_directory_uri(); ?>/images/common/sample-blog.jpg" alt="sample-blog">
							<?php endif; ?>
						</div>
						<div class="cate"><?php echo esc_html($terms[0]->name); ?></div>
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
						<time class="mont"><?php the_time("Y.m.d"); ?></time>
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
			<?php get_sidebar('blog'); ?>
		</div><!-- /.child-page-contents -->
	</div><!-- /.inner -->
</div><!-- /.child-page -->
<?php get_footer('company'); ?>

<?php */ ?>