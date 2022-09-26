<?php get_header('company'); ?>
<?php
	$terms = get_the_terms($post->ID,'blogcategory');
	foreach( $terms as $term ) {
		$termid = $term->term_id;
		$termname = $term->name;
		$termslug = $term->slug;
	}
?>
<div class="child-page blog-single single-page rel">
	<div class="inner">
		<div class="child-page-contents flex flexstart rel">
			<div class="child-main">
				<div class="title-area">
					<h1 class="mont child-en-title">Blog /</h1>
					<h2 class="child-ja-title">スタッフブログ</h2>
				</div><!-- /.title-area -->
				<div class="blog-top-area mt40 rel">
					<div class="txt">
						<div class="cate"><?php print $termname; ?></div>
						<h1 class="rel"><?php the_title(); ?></h1>
						<time class="mont"><?php the_time("Y.m.d"); ?></time>
					</div><!-- /.txt -->
				</div><!-- /.single-top-area -->
				<div class="blog-main-area">
					<?php if (has_post_thumbnail()) : ?>
						<div class="eyecatch">
							<?php the_post_thumbnail(); ?>
						</div><!-- /.eyecatch -->
					<?php endif; ?>
					<div class="editor">
						<?php if(have_posts()):while(have_posts()):the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile;endif; ?>
					</div><!-- /.editor -->
				</div><!-- /.single-main-area -->
			</div><!-- /.child-main -->
			<?php get_sidebar('blog'); ?>
		</div><!-- /.child-page-contents -->
	</div><!-- /.inner -->
<?php
$prev_url = twpp_get_adjacent_post_url( true );
$next_url = twpp_get_adjacent_post_url( false );
?>
	<div class="p-pager">
		<ul class="p-pager__list flex flexcenter">
			<li class="p-pager__prev <?php if(!$prev_url){print 'disable';} ?>"><a href="<?php print $prev_url; ?>"><span class="arrow-circle"></span><span>前の記事へ</span></a></li>
			<li class="p-pager__item"><a href="<?php echo home_url('/company/blog/'); ?>">スタッフブログ一覧</a></li>
			<li class="p-pager__next <?php if(!$next_url){print 'disable';} ?>"><a href="<?php print $next_url; ?>"><span>次の記事へ</span><span class="arrow-circle"></span></a></li>
		</ul>
	</div>
</div><!-- /.child-page -->
<?php get_footer('company'); ?>