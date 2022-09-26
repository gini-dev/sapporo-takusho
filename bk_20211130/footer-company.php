<?php
	if(is_page('recruit') || is_parent_slug() === 'recruit'):
	$template_slug = get_post($wp_query->post->ID)->post_name;
?>
<!--div class="recruit-bottom-menu">
	<div class="inner">
		<ul class="recruit-menu-ul flex">
			<li class="<?php if($template_slug == 'recruit'){print 'active';} ?>"><a href="<?php echo home_url('/company/recruit/'); ?>">採用情報<br class="sp">TOP</a></li>
			<li class="<?php if($template_slug == 'message'){print 'active';} ?>"><a href="<?php echo home_url('/company/recruit/message/'); ?>">代表<br class="sp">メッセージ</a></li>
			<li class="<?php if($template_slug == 'interview'){print 'active';} ?>"><a href="<?php echo home_url('/company/recruit/interview/'); ?>">仕事の<br class="sp">醍醐味</a></li>
			<li class="<?php if($template_slug == 'career-plan'){print 'active';} ?>"><a href="<?php echo home_url('/company/recruit/career-plan/'); ?>">キャリア<br class="sp">プラン</a></li>
			<li class="<?php if($template_slug == 'graduates'){print 'active';} ?>"><a href="<?php echo home_url('/company/recruit/graduates/'); ?>">募集要項<br class="sp">（新卒）</a></li>
			<li class="<?php if($template_slug == 'mid-career'){print 'active';} ?>"><a href="<?php echo home_url('/company/recruit/mid-career/'); ?>">募集要項<br class="sp">（中途）</a></li>
		</ul>
	</div>
</div--><!-- /.recruit-bottom-menu -->
<?php endif; ?>

<footer>
	<div class="inner">
		<div class="flex footer-out">
			<div class="left rel">
				<div class="f-logo">
					<img src="<?php echo get_template_directory_uri(); ?>/images/common/f-logo.svg" alt="logo">
				</div>
				<div class="left-link">
					<a href="<?php echo home_url('/service/'); ?>" target="_blank" class="blank-link rel">お客様向けサイト</a>
					<ul class="link-cont-pri mt40 flex jc-start">
						<li><a href="<?php echo home_url('/company/contact/'); ?>">お問い合わせ</a></li>
						<li><a href="<?php echo home_url('/company/privacy-policy/'); ?>">プライバシーポリシー</a></li>
					</ul>
					<p class="copy mont">CopyRight&copy;  [ 札幌宅商株式会社 ] All rights reserved</p>
				</div><!-- /.left-link -->
			</div><!-- /.left -->
			<div class="right footer-link-area flex">
				<div class="blo-out">
					<div class="blo">
						<h4 class="mont">About</h4>
						<a href="<?php echo home_url('/company/about/'); ?>" class="main-a">札幌宅商グループについて</a>
						<ul class="sub-link">
							<li><a href="<?php echo home_url('/company/about/greeting/'); ?>">グループ代表あいさつ</a></li>
							<li><a href="<?php echo home_url('/company/about/philosophy/'); ?>">企業理念、経営理念</a></li>
							<li><a href="<?php echo home_url('/company/about/brand/'); ?>">札幌宅商ブランド</a></li>
							<li><a href="<?php echo home_url('/company/about/history/'); ?>">沿革</a></li>
							<li><a href="<?php echo home_url('/company/about/cis-eis/'); ?>">CIS・EIS活動</a></li>
						</ul>
					</div><!-- /.blo -->
				</div><!-- /.blo-out -->
				<div class="blo-out">
					<div class="blo">
						<h4 class="mont">Company</h4>
						<a href="<?php echo home_url('/company/sapporotakusho/'); ?>" class="main-a">札幌宅商株式会社</a>
						<a href="<?php echo home_url('/company/livingdesign/'); ?>" class="main-a">札幌宅商リビングデザイン株式会社</a>
						<a href="<?php echo home_url('/company/group/'); ?>" class="main-a">札幌宅商グループ本部株式会社</a>
					</div><!-- /.blo -->
					<div class="blo">
						<h4 class="mont">Staff</h4>
						<a href="<?php echo home_url('/company/staff/'); ?>" class="main-a">スタッフ紹介</a>
						<a href="<?php echo home_url('/company/blog/'); ?>" class="main-a">スタッフブログ</a>
						<a href="<?php echo home_url('/company/report/'); ?>" class="main-a">社内活動報告</a>
					</div><!-- /.blo -->
				</div><!-- /.blo-out -->
				<div class="blo-out">
					<div class="blo">
						<h4 class="mont">Recruit</h4>
						<a href="<?php echo home_url('/company/recruit/'); ?>" class="main-a">採用情報</a>
						<ul class="sub-link">
							<li><a href="<?php echo home_url('/company/recruit/message/'); ?>">代表メッセージ</a></li>
							<li><a href="<?php echo home_url('/company/recruit/interview/'); ?>">仕事の醍醐味</a></li>
							<li><a href="<?php echo home_url('/company/recruit/career-plan/'); ?>">キャリアプラン</a></li>
							<li><a href="<?php echo home_url('/company/recruit/graduates/'); ?>">募集要項（新卒）</a></li>
							<li><a href="<?php echo home_url('/company/recruit/mid-career/'); ?>">募集要項（中途）</a></li>
						</ul>
					</div><!-- /.blo -->
				</div><!-- /.blo-out -->
			</div><!-- /.right -->
		</div><!-- /.footer-out -->
	</div><!-- /.inner -->
</footer>
<script src="<?php echo get_template_directory_uri(); ?>/js/common/jquery-3.1.0.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/common/viewport.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/common/js-image-switch.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.jpostal.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/function.js" type="text/javascript"></script>
<?php wp_footer(); ?>
</body>
</html>
