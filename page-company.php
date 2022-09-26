<?php get_header('company'); ?>
<div class="top-mv rel">
	<div class="top-txt-slider-area">
		<ul class="top-txt-slider">
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/images/top/mv1-txt.svg" alt="総合力の不動産。気配りではなく、心配りを。" class="mv-txt">
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/images/top/mv1-txt.svg" alt="総合力の不動産。気配りではなく、心配りを。" class="mv-txt">
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/images/top/mv2-txt.svg" alt="札幌宅商は、遊びも仕事も本気の不動産会社。" class="mv-txt">
			</li>
		</ul>
	</div><!-- /.top-txt-slider-area -->
	<ul class="top-mv-slider">
		<li>
			<img src="<?php echo get_template_directory_uri(); ?>/images/top/mv1_pc.png" alt="mv1" class="js-image-switch">
		</li>
		<li>
			<img src="<?php echo get_template_directory_uri(); ?>/images/top/mv2_pc.png" alt="mv2" class="js-image-switch">
		</li>
		<li>
			<img src="<?php echo get_template_directory_uri(); ?>/images/top/mv3_pc.png" alt="mv3" class="js-image-switch">
		</li>
	</ul>
<?php
	$args = array(
		'post_type' => array('blog', 'post'),
		'post_status' => 'publish',
		'orderby' => 'post_date',
		'order' => 'DESC',
		'posts_per_page' => 3,
		'category__not_in' => array(1,38,39,40,41,42,43)
	);
	$the_query = new WP_Query( $args );
//	var_dump($the_query);
?>
	<div class="top-news-area">
		<div class="flex flexcenter">
			<h2 class="mont">News</h2>
			<ul class="news-list">
<?php
	if($the_query->have_posts()): while($the_query->have_posts()) : $the_query->the_post();
	$cat = get_the_category();
	$cat_name = $cat[0]->cat_name;
?>
				<li><a href="<?php print get_permalink( ); ?>" class="flex flexcenter jc-start">
					<time class="mont"><?php the_time("Y.m.d"); ?></time>
					<h3>
						<?php
							if(mb_strlen($post->post_title, 'UTF-8')>15){
								$title= mb_substr($post->post_title, 0, 15, 'UTF-8');
								echo $title.'…';
							}else{
								echo $post->post_title;
							}
						?>
					</h3>
				</a></li>
<?php
	endwhile;endif;
	wp_reset_postdata();
?>
			</ul>
			<a href="<?php echo home_url('/company/report/'); ?>" class="more-link">社内活動報告<span class="arrow-circle"></span></a>
		</div>
	</div><!-- /.top-news-area -->
</div><!-- /.top-mv -->

<div class="main-contents top">
	<section class="about-area">
		<div class="inner">
			<div class="flex">
				<div class="left">
					<h2 class="mont sec-title">About</h2>
					<h3 class="sec-24-title mt15">札幌宅商グループについて</h3>
					<p class="mt40 sp-mt20">
						賃貸から売買、リフォーム、管理、保険まで札幌宅商では不動産にまつわる業務はすべて行います。賃貸専門、売買専門ではなく、総合力の不動産会社だからこそスムーズにお客様へ必要な情報やご提案を提供することが出来るのです。
					</p>
					<a href="<?php echo home_url('/company/about/'); ?>" class="link-btn rel mt60 sp-mt40">もっと見る</a>
				</div><!-- /.left -->
				<div class="right sp-mt40">
					<div class="about-link-list">
						<a href="<?php echo home_url('/company/sapporotakusho/'); ?>" class="rel">
							<h3 class="trance">札幌宅商株式会社</h3>
							<p>
								賃貸仲介業、売買仲介業、資産運用・資産管理を扱っている会社です。
							</p>
							<span class="arrow-circle"></span>
						</a>
						<a href="<?php echo home_url('/company/livingdesign/'); ?>" class="rel">
							<h3 class="trance">札幌宅商リビングデザイン株式会社</h3>
							<p>
								リフォーム・建築業を扱っている会社です。
							</p>
							<span class="arrow-circle"></span>
						</a>
						<a href="<?php echo home_url('/company/group/'); ?>" class="rel">
							<h3 class="trance">札幌宅商グループ本部株式会社</h3>
							<p>
								札幌宅商グループ全体を戦略的に担っている会社です。
							</p>
							<span class="arrow-circle"></span>
						</a>
					</div>
				</div><!-- /.right -->
			</div><!-- /.flex -->
		</div><!-- /.inner -->
		<img src="<?php echo get_template_directory_uri(); ?>/images/top/about-bg_pc.jpg" alt="about-bg" class="js-image-switch about-bg">
	</section><!-- /.about-area -->
	<section class="staff-area">
		<div class="inner">
			<div class="top-title flex flexcenter">
				<div class="right-border-title flex jc-start flexcenter">
					<h2 class="mont sec-title">Staff</h2>
					<div>
						<h3 class="sec-24-title">スタッフ紹介</h3>
						<p class="sp-mt20">
							社員＝ブランドの札幌宅商グループ社員をご紹介。個性豊かな社員がたくさん在籍しております。お気に入りの社員をぜひ見つけてください。
						</p>
					</div>
				</div>
				<a href="<?php echo home_url('/company/staff/'); ?>" class="txt-link sp-mt20">スタッフ紹介一覧を見る<span class="arrow-circle"></span></a>
			</div>
		</div><!-- /.inner -->
<?php
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$args = array(
		'post_type' => 'staff',
		'post_status' => 'publish',
		'posts_per_page' => 10,
		'paged' => $paged
	);
	$the_query = new WP_Query( $args );
?>
		<div class="staff-slider-area mt50">
			<div class="scroll-area">
				<ul class="staff-archive-list">
<?php
	if($the_query->have_posts()): while($the_query->have_posts()) : $the_query->the_post();
	$ID = $post->post_author;
	$placeterms = "";
	$placeterms = get_the_terms($post->ID, 'place');
	$clubterms = "";
	$clubterms = get_the_terms($post->ID, 'club');
	$image1 = get_field('img1');
	$image2 = get_field('img2');
	$size = 'full';
?>
					<li><a href="<?php print get_permalink( ); ?>">
						<div class="img">
							<?php print wp_get_attachment_image($image1,$size,false,array('class'=>'main-img')); ?>
							<?php print wp_get_attachment_image($image2,$size,false,array('class'=>'hover-img')); ?>
						</div>
						<div class="txt">
							<h4 class="rel">
								<span class="trance"><?php
									if(mb_strlen($post->post_title, 'UTF-8')>25){
										$title= mb_substr($post->post_title, 0, 25, 'UTF-8');
										echo $title.'…';
									}else{
										echo $post->post_title;
									}
								?></span>
								<p><?php print get_field('kana'); ?></p>
							</h4>
							<div class="sub"><?php print get_field('hire_date'); ?>年入社<?php if($placetermname){ print "/";} ?><?php echo $placetermname; ?><?php if($clubterms[0]->name){ print "/";} ?><?php echo esc_html($clubterms[0]->name); ?></div>
						</div>
					</a></li>
<?php
	endwhile;endif;
	wp_reset_postdata();
?>
				</ul>
			</div>
		</div><!-- /.staff-slider-area -->
	</section><!-- /.staff-area -->
	<section class="recruit-area">
		<div class="flex flexcenter jc-start">
			<div class="img">
				<img src="<?php echo get_template_directory_uri(); ?>/images/top/recruit-img.jpg" alt="recruit-img">
			</div>
			<div class="txt">
				<h2 class="mont sec-title">Recruit</h2>
				<h3 class="sec-24-title mt40 sp-mt20">総合力の不動産会社だからできる<br class="pc">幅広い経験と成長。</h3>
				<p class="mt30 sp-mt20">
					組織力で対応できる体制を整え、売買・賃貸・管理・リフォーム・保険、それぞれのプロフェッショナルが連携し合ってお客様に対応しています。
				</p>
				<a href="<?php echo home_url('/company/recruit/'); ?>" class="link-btn rel mt60 sp-mt30">採用情報TOP</a>
			</div><!-- /.txt -->
		</div>
	</section><!-- /.recruit-area -->
</div><!-- /.main-contents -->


<?php get_footer('company'); ?>
