<?php get_header('company'); ?>
<?php
	$ID = $post->post_author;
	$placeterms = get_the_terms($post->ID,'place');
	if ($placeterms != null) {
		foreach( $placeterms as $placeterm ) {
			$placetermid = $placeterm->term_id;
			$placetermname = $placeterm->name;
			$placetermslug = $placeterm->slug;
		}
	}
	$clubterms = get_the_terms($post->ID,'club');
	if ($clubterms != null) {
		foreach( $clubterms as $clubterm ) {
			$clubtermid = $clubterm->term_id;
			$clubtermname[] = $clubterm->name;
			$clubtermslug = $clubterm->slug;
		}
	}
	$departmentterms = get_the_terms($post->ID,'departmentcategory');
	if ($departmentterms != null) {
		foreach( $departmentterms as $departmentterm ) {
			$departmenttermid = $departmentterm->term_id;
			$departmenttermname = $departmentterm->name;
			$departmenttermslug = $departmentterm->slug;
		}
	}
	for($i = 1;$i <= 5;$i++){
		if(get_field('img'.$i)){
			$images[] = get_field('img'.$i);
		}
	}
	$size = 'full';
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
						<h1 class="rel"><?php the_title(); ?><p><?php print get_field('kana'); ?></p></h1>
						<div class="sub">
							<p><?php print $departmenttermname; ?></p>
							<?php if(get_field('position')): ?>
								<p><?php the_field('position'); ?></p>
							<?php endif; ?>
							<?php if(get_field('hire_date')): ?>
								<p><?php the_field('hire_date'); ?>年入社</p>
							<?php endif; ?>
<?php if($placetermname): ?>
							<p>出身地：<?php print $placetermname; ?></p>
<?php endif; ?>
<?php if($clubtermname): ?>
							<p>所属同好会：<?php
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
							<?php if(get_field('award')): ?>
								<p>過去の社内受賞歴：<?php the_field('award'); ?></p>
							<?php endif; ?>
							<?php if(get_field('birthday')): ?>
								<p>誕生日：<?php the_field('birthday'); ?></p>
							<?php endif; ?>
							<?php if(get_field('hobby')): ?>
								<p>趣味・特技・保有資格：<?php the_field('hobby'); ?></p>
							<?php endif; ?>
						</div>
					</div><!-- /.txt -->
					<div class="img">
						<ul class="staff-slider slides">
							<?php foreach($images as $value){ ?>
								<li><?php print wp_get_attachment_image($value,$size); ?></li>
							<?php } ?>
						</ul>
					</div><!-- /.img -->
				</div><!-- /.single-top-area -->
				<div class="single-main-area">
				<?php if(get_field('answer1')): ?>
					<div class="blo rel">
						<h2><?php the_field('question1'); ?></h2>
						<p>
							<?php the_field('answer1'); ?>
						</p>
					</div>
				<?php endif; ?>
				<?php if(get_field('answer2')): ?>
					<div class="blo rel">
						<h2><?php the_field('question2'); ?></h2>
						<p>
							<?php the_field('answer2'); ?>
						</p>
					</div>
				<?php endif; ?>
				<?php if(get_field('answer3')): ?>
					<div class="blo rel">
						<h2><?php the_field('question3'); ?></h2>
						<p>
							<?php the_field('answer3'); ?>
						</p>
					</div>
				<?php endif; ?>
				<?php if(get_field('answer4')): ?>
					<div class="blo rel">
						<h2><?php the_field('question4'); ?></h2>
						<p>
							<?php the_field('answer4'); ?>
						</p>
					</div>
				<?php endif; ?>
				<?php if(get_field('answer5')): ?>
					<div class="blo rel">
						<h2><?php the_field('question5'); ?></h2>
						<p>
							<?php the_field('answer5'); ?>
						</p>
					</div>
				<?php endif; ?>
				</div><!-- /.single-main-area -->

<?php
	$check_posts = get_posts( array(
		'author' => $ID,
		'post_type' => "blog"
	));
?>

				<div class="staff-single-links flex">
<?php if( $check_posts ): ?>
					<a href="<?php echo home_url('/company/blog/?userid='.$ID); ?>" class="link-btn rel thin">このスタッフのブログを見る</a>
<?php endif; ?>
					<a href="<?php echo home_url('/company/contact/'); ?>" class="link-btn rel">このスタッフに問い合わせる</a>
				</div>
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
			<li class="p-pager__prev <?php if(!$prev_url){print 'disable';} ?>"><a href="<?php print $prev_url; ?>"><span class="arrow-circle"></span><span class="txt">前のスタッフへ</span></a></li>
			<li class="p-pager__item"><a href="<?php echo home_url('/company/staff/'); ?>">スタッフ紹介<br class="sp">一覧</a></li>
			<li class="p-pager__next <?php if(!$next_url){print 'disable';} ?>"><a href="<?php print $next_url; ?>"><span class="txt">次のスタッフへ</span><span class="arrow-circle"></span></a></li>
		</ul>
	</div>
</div><!-- /.child-page -->
<?php get_footer('company'); ?>