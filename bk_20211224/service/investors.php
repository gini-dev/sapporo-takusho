	<main role="main">
		<!-- l-page_content -->
		<section class="l-page_content">

			<div class="l-page_head">
				<div class="l-page_head__inner">
					<h2 class="p-heading_lv1">投資家の皆様へ</h2>
				</div>
				<div class="topic_path">
					<ul>
						<li><a href="<?php echo home_url('/service/'); ?>">TOP</a></li>
						<li>投資家の皆様へ</li>
					</ul>
				</div>
			</div>

			<section class="l-page_section p-page_mv pb0">
				<div class="l-page_section__inner">
					<h3 class="p-heading_lv2">投資物件の売却をお考えのオーナー様へ</h3>
					<p>札幌宅商では、物件をお探しのお客様情報を多数保有しており、投資物件を「早く高く売りたい」とお考えのオーナー様のご希望にお応えします。<br>
						投資物件の売却は、次のオーナー様側にもメリットが大きく、実は売却しやすいという性質があります。</p>
				</div>
			</section>

<?php
	$args = array(
		'post_type' => 'voice',
		'post_status' => 'publish',
		'orderby' => 'post_date',
		'order' => 'DESC',
		'posts_per_page' => 3,
		'tax_query' => array(
			array(
				'taxonomy' => 'voicecategory',
				'field' => 'slug',
				'terms' => 'uritai',
			),
		)
	);
	$the_query = new WP_Query( $args );
?>
			<section class="l-page_section">
				<section class="p-module_voice js-animateblock">
					<div class="p-module_voice__inner">
						<div class="p-module_voice__head">
							<div class="elem_en">VOICE</div>
							<div class="elem_jp">感動エピソード紹介</div>
						</div>
					</div>
					<div class="p-module_voice__body js-animateblock">
						<ul class="p-module_voice__list">
<?php
	if($the_query->have_posts()): while($the_query->have_posts()) : $the_query->the_post();
	$terms = get_the_terms($post->ID, 'voicecategory');
?>
							<li class="p-module_voice__item c-voice uritai js-animateblock--scale">
								<a href="<?php print get_permalink( ); ?>">
									<div class="category">不動産売却</div>
									<div class="comment">
										<div class="comment__title">
											<?php
												if(mb_strlen($post->post_title, 'UTF-8')>25){
													$title= mb_substr($post->post_title, 0, 25, 'UTF-8');
													echo $title.'…';
												}else{
													echo $post->post_title;
												}
											?>
										</div>
										<div class="comment__name"><?php print get_field('customer'); ?></div>
									</div>
									<div class="meta">
										<div class="meta__photo"><?php print wp_get_attachment_image(get_field('staff')['image'],'thumbnail'); ?></div>
										<dl class="meta__employee">
											<dt>担当社員</dt>
											<dd><?php print get_field('staff')['name']; ?></dd>
										</dl>
									</div>
								</a>
							</li>
<?php
	endwhile;endif;
	wp_reset_postdata();
?>
						</ul>
					</div>
					<div class="p-btn p-btn--primary"><div class="inner"><a href="<?php echo home_url('/service/voice/'); ?>">感動エピソードをもっと見る<i class="p-icon--arrow_r_01"></i></a></div></div>
				</section>
			</section>

			<section class="l-page_section bg--gray">
				<div class="c-module_point">
					<div class="c-module_point__head">
						<h3 class="p-heading_lv2">投資物件の購入をお考えのオーナー様へ</h3>
						<!--p>投資物件を売却するメリットは大きく3つあります。<br>
							1つ目は現金化できること。2つ目は維持費がかからなくなること。最後に税負担が軽減すること。<br>
							この中でも1つ目の現金化を目的として売却される方が多いです。現金化することで、運用がしやすくなります。ローンの残りの返済に充当したり、新たな不動産購入の資金にすることができます。<br>
							投資物件の売却は、次のオーナー様側に多くのメリットがあり、実は売却しやすいという性質があります。そのため、短い期間で物件を現金化することが可能です。</p-->
					</div>
					<div class="c-module_point__body">
						<div class="c-module_point__wrap">
							<div class="c-module_point__inner js-animateblock">
								<div class="c-module_point__icon"><div class="c-module_point__icon__inner">Point<b>01</b></div></div>
								<div class="c-module_point__column">
									<div class="c-module_point__column__inner">
										<div class="c-module_point__column__content">
											<h3 class="p-heading_lv3">お客様のご要望に応じた物件をご提案いたします</h3>
											<h4 class="p-heading_lv4">「感動」するご提案をお約束します</h4>
											<p>会社本位のご提案ではなく、真摯にお客様のご要望に耳を傾け、ご要望に応じた物件をご提案いたします。オーナー様の期待を超える「感動」するご提案をお約束します。</p>
										</div>
										<div class="c-module_point__column__image">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/investors/image_point_01.jpg" alt="">
										</div>
									</div>
								</div>
							</div>
							<div class="c-module_point__inner js-animateblock">
								<div class="c-module_point__icon"><div class="c-module_point__icon__inner">Point<b>02</b></div></div>
								<div class="c-module_point__column">
									<div class="c-module_point__column__inner">
										<div class="c-module_point__column__content">
											<h3 class="p-heading_lv3">集客から管理まで、物件購入後もサポート</h3>
											<h4 class="p-heading_lv4">「総合力の不動産会社」だからできること</h4>
											<p>札幌宅商では、オーナー様の物件の購入から、購入物件への入居者集客・仲介、そして管理まで一括して担当させていただきます。売買専門、管理専門ではない、「総合力の不動産会社」である弊社だからこそご案内ができます。</p>
										</div>
										<div class="c-module_point__column__image">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/investors/image_point_02.jpg" alt="">
										</div>
									</div>
								</div>
							</div>
							<div class="c-module_point__inner js-animateblock">
								<div class="c-module_point__icon"><div class="c-module_point__icon__inner">Point<b>03</b></div></div>
								<div class="c-module_point__column">
									<div class="c-module_point__column__inner">
										<div class="c-module_point__column__content">
											<h3 class="p-heading_lv3">最新物件情報をいち早くご案内</h3>
											<h4 class="p-heading_lv4">札幌エリアを中心に全道の物件情報が集まります</h4>
											<p>オーナー様のご希望を丁寧にヒアリングさせていただき、創業50年の札幌宅商だからこそできる地域に密着した情報を早くご案内いたします。</p>
										</div>
										<div class="c-module_point__column__image">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/investors/image_point_03.jpg" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

<?php
	$args = array(
		'post_type' => 'voice',
		'post_status' => 'publish',
		'orderby' => 'post_date',
		'order' => 'DESC',
		'posts_per_page' => 3,
		'tax_query' => array(
			array(
				'taxonomy' => 'voicecategory',
				'field' => 'slug',
				'terms' => 'kaitai',
			),
		)
	);
	$the_query = new WP_Query( $args );
?>
			<section class="l-page_section">
				<section class="p-module_voice js-animateblock">
					<div class="p-module_voice__inner">
						<div class="p-module_voice__head">
							<div class="elem_en">VOICE</div>
							<div class="elem_jp">感動エピソード紹介</div>
						</div>
					</div>
					<div class="p-module_voice__body js-animateblock">
						<ul class="p-module_voice__list">
<?php
	if($the_query->have_posts()): while($the_query->have_posts()) : $the_query->the_post();
	$terms = get_the_terms($post->ID, 'voicecategory');
?>
							<li class="p-module_voice__item c-voice kaitai js-animateblock--scale">
								<a href="<?php print get_permalink( ); ?>">
									<div class="category">売買</div>
									<div class="comment">
										<div class="comment__title">
											<?php
												if(mb_strlen($post->post_title, 'UTF-8')>25){
													$title= mb_substr($post->post_title, 0, 25, 'UTF-8');
													echo $title.'…';
												}else{
													echo $post->post_title;
												}
											?>
										</div>
										<div class="comment__name"><?php print get_field('customer'); ?></div>
									</div>
									<div class="meta">
										<div class="meta__photo"><?php print wp_get_attachment_image(get_field('staff')['image'],'thumbnail'); ?></div>
										<dl class="meta__employee">
											<dt>担当社員</dt>
											<dd><?php print get_field('staff')['name']; ?></dd>
										</dl>
									</div>
								</a>
							</li>
<?php
	endwhile;endif;
	wp_reset_postdata();
?>
						</ul>
					</div>
					<div class="p-btn p-btn--primary"><div class="inner"><a href="<?php echo home_url('/service/voice/'); ?>">感動エピソードをもっと見る<i class="p-icon--arrow_r_01"></i></a></div></div>
				</section>
			</section>

			<section class="l-page_section c-module_banner">
				<div class="l-page_section__inner c-module_banner__inner">
					<div class="c-module_banner__body">
						<ul class="c-module_banner__list">
							<li class="c-module_banner__item download">
								<a href="<?php echo home_url('/service/uritai/'); ?>" class="">
									<figure>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/investors/banner_01.jpg" alt="">
										<figcaption class="title p-icon--uritai">売りたい</figcaption>
									</figure>
								</a>
							</li>
							<li class="c-module_banner__item useful">
								<a href="<?php echo home_url('/service/kaitai/'); ?>" class="">
									<figure>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/investors/banner_02.jpg" alt="">
										<figcaption class="title p-icon--kaitai">買いたい</figcaption>
									</figure>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</section>

		</section>
		<!-- //l-page_content -->
	</main>

	<div class="c-cta">
		<ul class="c-cta__list">
			<li class="c-cta__item contact"><a href="<?php echo home_url('/service/contact/'); ?>"><i class="p-icon--contact"></i>お問い合わせ</a></li>
		</ul>
	</div>
