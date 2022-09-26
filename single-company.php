<?php get_header('company'); ?>
<?php
	$category = get_the_category();
	$cat = $category[0];
	$cat_name = $cat->name;
	$cat_id = $cat->cat_ID;
	$cat_slug = $cat->slug;
?>
<div class="child-page report-single single-page rel">
	<div class="inner">
		<div class="child-page-contents flex flexstart rel">
			<div class="child-main">
				<div class="title-area">
					<h1 class="mont child-en-title">Report /</h1>
					<h2 class="child-ja-title">社内活動報告</h2>
				</div><!-- /.title-area -->
				<div class="blog-top-area mt40 rel">
					<div class="txt">
						<div class="cate"><?php print $cat_name; ?></div>
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
			<?php get_sidebar('report'); ?>
		</div><!-- /.child-page-contents -->
	</div><!-- /.inner -->
<?php
$prev_url = twpp_get_adjacent_post_url2( true );
$next_url = twpp_get_adjacent_post_url2( false );
?>
	<div class="p-pager">
		<ul class="p-pager__list flex flexcenter">
			<li class="p-pager__prev <?php if(!$prev_url){print 'disable';} ?>"><a href="<?php print $prev_url; ?>"><span class="arrow-circle"></span><span class="txt">前の記事へ</span></a></li>
			<li class="p-pager__item"><a href="<?php echo home_url('/company/report/'); ?>">活動報告一覧</a></li>
			<li class="p-pager__next <?php if(!$next_url){print 'disable';} ?>"><a href="<?php print $next_url; ?>"><span class="txt">次の記事へ</span><span class="arrow-circle"></span></a></li>
		</ul>
	</div>
</div><!-- /.child-page -->
</div><!-- /.child-page -->
<?php get_footer('company'); ?>