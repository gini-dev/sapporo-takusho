<!DOCTYPE html>
<html lang="ja">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width,user-scalable=no,shrink-to-fit=yes">
<meta charset="utf-8" />
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/common/favicon.ico">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slick.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/icomoon.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/common.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/fontello.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">

<?php wp_head(); ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-J26CZSQF6P"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-J26CZSQF6P');
</script>
</head>
<body>
<header class="<?php if(is_page('company')){print 'top-page';} ?>">
	<div class="header flex rel">
		<div class="header-left flex jc-start flexcenter">
			<div class="menu-btn">
				<a href="#" id="panel-btn"><span id="panel-btn-icon"></span></a>
			</div><!-- /.menu-btn -->
			<a href="<?php echo home_url('/company/'); ?>" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/common/logo.svg" alt="logo"></a>
		</div>
		<ul class="header-ul flex">
			<li><a href="<?php echo home_url('/service/survey/rental-survey/'); ?>" target="_blank">成約者アンケート</a></li>
			<li><a href="<?php echo home_url('/company/contact/'); ?>">お問い合わせ</a></li>
			<li><a href="<?php echo home_url('/service/'); ?>" target="_blank">お客様向けサイト</a></li>
		</ul>
		<div class="header-menu" id="panel">
			<div class="flex menu-flex">
				<div class="blo">
					<h4 class="mont rel">About</h4>
					<h5><a href="<?php echo home_url('/company/about/'); ?>">札幌宅商グループについて</a></h5>
					<ul>
						<li><a href="<?php echo home_url('/company/about/greeting/'); ?>">グループ代表あいさつ</a></li>
						<li><a href="<?php echo home_url('/company/about/philosophy/'); ?>">企業理念、経営理念</a></li>
						<li><a href="<?php echo home_url('/company/about/brand/'); ?>">札幌宅商ブランド</a></li>
						<li><a href="<?php echo home_url('/company/about/history/'); ?>">沿革</a></li>
						<li><a href="<?php echo home_url('/company/about/cis-eis/'); ?>">CIS・EIS活動</a></li>
					</ul>
				</div><!-- /.blo -->
				<div class="blo">
					<h4 class="mont rel">Company</h4>
					<h5><a href="<?php echo home_url('/company/sapporotakusho/'); ?>">札幌宅商株式会社</a></h5>
					<h5><a href="<?php echo home_url('/company/livingdesign/'); ?>">札幌宅商<br>リビングデザイン株式会社</a></h5>
					<h5><a href="<?php echo home_url('/company/group/'); ?>">札幌宅商<br>グループ本部株式会社</a></h5>
				</div><!-- /.blo -->
				<div class="blo">
					<h4 class="mont rel">Staff</h4>
					<h5><a href="<?php echo home_url('/company/staff/'); ?>">スタッフ紹介</a></h5>
					<h5><a href="<?php echo home_url('/company/blog/'); ?>">スタッフブログ</a></h5>
					<h5><a href="<?php echo home_url('/company/report/'); ?>">社内活動報告</a></h5>
				</div><!-- /.blo -->
				<div class="blo">
					<h4 class="mont rel">Recruit</h4>
					<h5><a href="<?php echo home_url('/company/recruit/'); ?>">採用情報</a></h5>
					<ul>
						<li><a href="<?php echo home_url('/company/recruit/message/'); ?>">代表メッセージ</a></li>
						<li><a href="<?php echo home_url('/company/recruit/interview/'); ?>">仕事の醍醐味</a></li>
						<li><a href="<?php echo home_url('/company/recruit/career-plan/'); ?>">キャリアプラン</a></li>
						<li><a href="<?php echo home_url('/company/recruit/graduates/'); ?>">募集要項（新卒）</a></li>
						<li><a href="<?php echo home_url('/company/recruit/mid-career/'); ?>">募集要項（中途）</a></li>
					</ul>
				</div><!-- /.blo -->
			</div><!-- /.menu-flex -->
		</div><!-- /.header-menu -->
	</div><!-- /.header -->
	<?php if(!is_page('company')): ?>
	<div class="pankuzu mt30">
		<div class="inner">
			<div class="breadcrumbs sans" typeof="BreadcrumbList" vocab="http://schema.org/">
				<?php if(function_exists('bcn_display')){bcn_display();} ?>
			</div><!-- /.breadcrumbs -->
		</div><!-- /.inner -->
	</div><!-- /.pankuzu -->
	<?php endif; ?>
</header>