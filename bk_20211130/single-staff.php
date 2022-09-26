<?php get_header('company'); ?>
<?php
	$ID = $post->post_author;
	$placeterms = get_the_terms($post->ID,'place');
	foreach( $placeterms as $placeterm ) {
		$placetermid = $placeterm->term_id;
		$placetermname = $placeterm->name;
		$placetermslug = $placeterm->slug;
	}
	$clubterms = get_the_terms($post->ID,'club');
	foreach( $clubterms as $clubterm ) {
		$clubtermid = $clubterm->term_id;
		$clubtermname[] = $clubterm->name;
		$clubtermslug = $clubterm->slug;
	}
?>
<div class="child-page staff-single single-page rel">
	<div class="inner">
		<div class="child-page-contents flex flexstart rel">
			<div class="child-main">
				<div class="title-area">
					<h1 class="mont child-en-title">Staff /</h1>
					<h2 class="child-ja-title">スタッフ紹介</h2>
				</div><!-- /.title-area -->
				<div class="single-top-area flex flexcenter mt40">
					<div class="txt">
						<h1 class="rel"><?php the_title(); ?></h1>
						<div class="posi"><?php echo get_the_author_meta('department',$ID); ?></div>
						<div class="posi"><?php echo get_the_author_meta('position',$ID); ?></div>
						<div class="name"><?php echo get_the_author_meta('first_name',$ID).get_the_author_meta('last_name',$ID); ?></div>
						<div class="sub">
							<p><?php print get_field('hire_date'); ?>年入社</p>
							<p><?php print $placetermname; ?></p>
<?php if($clubtermname): ?>
							<p><?php
								$cnt = count($clubtermname);
								$i = 0;
								
								foreach($clubtermname as $val){
									$i++;
									print $val;
									if($cnt !=$i){
										print ",";
									}
								}
							?></p>
<?php endif; ?>
						</div>
					</div><!-- /.txt -->
					<div class="img">
						<?php the_post_thumbnail(); ?>
					</div><!-- /.img -->
				</div><!-- /.single-top-area -->
				<!--div class="single-main-area">
					<div class="blo rel">
						<h2>どうして札幌宅商グループにはいりましたか？</h2>
						<p>
							<?php print get_field('why'); ?>
						</p>
					</div>
					<div class="blo rel">
						<h2>どんな仕事をしていますか？</h2>
						<p>
							<?php print get_field('what'); ?>
						</p>
					</div>
					<div class="blo rel">
						<h2>目標はなんですか？</h2>
						<p>
							<?php print get_field('goal'); ?>
						</p>
					</div>
					<div class="blo rel">
						<h2>お客様へ一言</h2>
						<p>
							<?php print get_field('word'); ?>
						</p>
					</div>
				</div--><!-- /.single-main-area -->
			</div><!-- /.child-main -->
			<?php get_sidebar('staff'); ?>
		</div><!-- /.child-page-contents -->
	</div><!-- /.inner -->
<?php
$prev_url = twpp_get_adjacent_post_url( true );
$next_url = twpp_get_adjacent_post_url( false );
?>
	<div class="p-pager">
		<ul class="p-pager__list flex flexcenter">
			<li class="p-pager__prev <?php if(!$prev_url){print 'disable';} ?>"><a href="<?php print $prev_url; ?>"><span class="arrow-circle"></span><span>前のスタッフへ</span></a></li>
			<li class="p-pager__item"><a href="<?php echo home_url('/company/staff/'); ?>">スタッフ紹介一覧</a></li>
			<li class="p-pager__next <?php if(!$next_url){print 'disable';} ?>"><a href="<?php print $next_url; ?>"><span>次のスタッフへ</span><span class="arrow-circle"></span></a></li>
		</ul>
	</div>
</div><!-- /.child-page -->
<?php get_footer('company'); ?>