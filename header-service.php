<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/common/favicon.ico">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/yakuhanjp@3.4.1/dist/css/yakuhanjp-noto.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
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
<?php
	$template_slug = get_post($wp_query->post->ID)->post_name;

	if(is_page('service')){
		$template_slug = "home";
	}elseif(is_page('3re')){
		$template_slug = "page_3re";
	}elseif(is_singular('case')){
		$template_slug = "case single";
	}elseif(is_singular('voice')){
		$template_slug = "voice single";
	}elseif(is_post_type_archive('case') || is_tax('casecategory')){
		$template_slug = "case";
	}elseif(is_post_type_archive('voice') || is_tax('voicecategory')){
		$template_slug = "voice";
	}elseif(is_archive('service')){
		$template_slug = "news";
	}elseif(is_single()){
		$template_slug = "news single";
	}elseif(is_page('rental') || is_page('purchase') || is_page('sale') || is_page('reform-request')){
		$template_slug = "request";
	}elseif(is_page('rental-survey') || is_page('purchase-survey') || is_page('sale-survey') || is_page('reform-survey') || is_page('rent-survey')){
		$template_slug = "survey";
	}
?>
<body class="<?php print $template_slug; ?>">

<header class="l-site_header">
	<div class="l-site_header__inner">
		<h1 class="l-site_header__id">
			<a href="<?php echo home_url('/service/'); ?>">
				<div class="logo">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo_w_01.svg" alt="since 1971 SAPPORO TAKUSHO GROUP" width="122">
				</div>
				<div class="elem">
					<div class="elem_jp">札幌宅商グループ</div>
					<div class="elem_en">SERVICE SITE</div>
				</div>
			</a>
		</h1>
		<aside class="l-site_header__nav">
			<ul class="l-site_header__nav__list">
				<li class="l-site_header__nav__item request"><a href="<?php echo home_url('/service/request/rental/'); ?>" class="p-icon--request">物件リクエスト</a></li>
				<li class="l-site_header__nav__item reservation"><a href="<?php echo home_url('/service/reservation/'); ?>" class="p-icon--reservation">来店予約</a></li>
				<li class="l-site_header__nav__item contact"><a href="<?php echo home_url('/service/contact/'); ?>" class="p-icon--contact">お問い合わせ</a></li>
			</ul>
		</aside>
		<div class="l-site_header__menu"><div class="l-site_header__menu__inner"><span></span><span></span><span></span><span></span><span></span></div></div>
		<div class="l-site_header__gnav">
			<div class="l-site_header__gnav__head">
				<a href="<?php echo home_url('/service/'); ?>">
					<div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo_b_01.svg" alt="since 1971 SAPPORO TAKUSHO GROUP" width="122"></div>
					<div class="elem">
						<div class="elem_jp">札幌宅商グループ</div>
						<div class="elem_en">SERVICE SITE</div>
					</div>
				</a>
			</div>
			<div class="l-site_header__gnav__inner">
				<nav>
					<ul>
						<li><a href="<?php echo home_url('/service/karitai/'); ?>" class="p-icon--karitai">借りたい</a></li>
						<li><a href="<?php echo home_url('/service/kaitai/'); ?>" class="p-icon--kaitai">買いたい</a></li>
						<li><a href="<?php echo home_url('/service/kashitai/'); ?>" class="p-icon--kashitai">貸したい</a></li>
						<li><a href="<?php echo home_url('/service/uritai/'); ?>" class="p-icon--uritai">売りたい</a></li>
						<li>
							<a href="<?php echo home_url('/service/reform/'); ?>" class="p-icon--reform">リフォーム</a>
							<ul>
								<li><a href="<?php echo home_url('/service/reform/3re/'); ?>">3RE</a></li>
								<li><a href="<?php echo home_url('/service/reform/case/'); ?>">リフォーム事例紹介</a></li>
							</ul>
						</li>
					</ul>
				</nav>
				<aside>
					<ul>
						<li><a href="<?php echo home_url('/service/voice/'); ?>">感動エピソード紹介</a></li>
						<li><a href="<?php echo home_url('/service/promise/'); ?>">お客様との約束</a></li>
						<li><a href="<?php echo home_url('/service/news/'); ?>">ニュース＆トピックス</a></li>
						<li><a href="<?php echo home_url('/service/shopinfo/'); ?>">店舗情報</a></li>
						<li><a href="<?php echo home_url('/service/privilege/'); ?>">お客様ご紹介カード</a></li>
						<li><a href="<?php echo home_url('/service/insurance/'); ?>">保険について</a></li>
						<li><a href="<?php echo home_url('/service/download/'); ?>">各種書類ダウンロード</a></li>
					</ul>
				</aside>
				<div class="p-btn p-btn--border"><div class="inner"><a href="<?php echo home_url('/company/'); ?>" target="_blank">企業情報サイト<i class="p-icon--blank"></i></a></div></div>
			</div>
			<ul class="l-site_header__nav__list">
				<li class="l-site_header__nav__item request"><a href="<?php echo home_url('/service/request/rental/'); ?>" class="p-icon--request">物件リクエスト</a></li>
				<li class="l-site_header__nav__item reservation"><a href="<?php echo home_url('/service/reservation/'); ?>" class="p-icon--reservation">来店予約</a></li>
				<li class="l-site_header__nav__item contact"><a href="<?php echo home_url('/service/contact/'); ?>" class="p-icon--contact">お問い合わせ</a></li>
			</ul>
		</div>
	</div>
</header>