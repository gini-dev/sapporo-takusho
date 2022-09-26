<?php get_header('service'); ?>

<main role="main">
	<!-- l-home_content -->
	<section class="l-home_content">

		<div class="l-home_hero">
			<div class="slick js-animateblock">
				<div class="slick__list">
					<div class="slick__item"><a href="<?php echo home_url('/service/information-service/★新しいサービスのご紹介★/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/slider_01.png" alt="" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/home/slider_01.png 1x, <?php echo get_template_directory_uri(); ?>/assets/img/home/slider_01_sp.png 768w"></a></div>
					<div class="slick__item"><a href="<?php echo home_url('/service/reform/case/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/slider_05.png" alt="" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/home/slider_05.png 1x, <?php echo get_template_directory_uri(); ?>/assets/img/home/slider_05_sp.png 768w"></a></div>
					<div class="slick__item"><a href="<?php echo home_url('/service/information-service/★お客様へのご提案方法多様化について【web相談/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/20210901014236.PNG" alt="" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/home/20210901014236.PNG 1x, <?php echo get_template_directory_uri(); ?>/assets/img/home/slider_03_sp.png 768w"></a></div>
					<!--div class="slick__item"><a href="<?php echo home_url('/service/privilege/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/slider_04.png" alt="" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/home/slider_04.png 1x, <?php echo get_template_directory_uri(); ?>/assets/img/home/slider_04_sp.png 768w"></a></div-->
				</div>
			</div>
		</div>

		<section class="l-home_section p-home_information">
			<div class="l-home_section__inner p-home_information__inner">
				<div class="p-home_information__head js-animateblock">
					<h2 class="p-sub_heading">
						<div class="elem_en">INFORMATION</div>
						<div class="elem_jp">札幌宅商からのお知らせ</div>
					</h2>
					<div class="p-btn--more"><div class="inner"><span><a href="<?php echo home_url('/service/news/'); ?>">一覧を見る<i class="p-icon--arrow_r_01"></i></a></span></div></div>
				</div>
<?php
	$args = array(
		'post_type' => 'post',
		'post_status' => 'publish',
		'orderby' => 'post_date',
		'order' => 'DESC',
		'posts_per_page' => 3,
		'category_name' => 'service'
	);
	$the_query = new WP_Query( $args );
?>
				<div class="p-home_information__body js-animateblock">
					<ul class="p-home_information__list">
<?php
	if($the_query->have_posts()): while($the_query->have_posts()) : $the_query->the_post();
	$cat = get_the_category();
	$cat_name = $cat[0]->cat_name;
?>
						<li class="p-home_information__item"><a href="<?php print get_permalink( ); ?>">
							<time class="time"><?php the_time("Y.m.d"); ?></time>
							<span class="title">
								<?php
									if(mb_strlen($post->post_title, 'UTF-8')>25){
										$title= mb_substr($post->post_title, 0, 25, 'UTF-8');
										echo $title.'…';
									}else{
										echo $post->post_title;
									}
								?>
							</span>
						</a></li>
<?php
	endwhile;endif;
	wp_reset_postdata();
?>
					</ul>
				</div>
			</div>
		</section>

		<section class="l-home_section p-home_philosophy">
			<div class="l-home_section__inner p-home_philosophy__inner">
				<div class="p-home_philosophy__head js-animateblock">
					<h2 class="heading">
						<div class="elem_en">PHILOSOPHY</div>
						<div class="elem_jp">
							<span>「社員」=</span>
							<span>「ブランド」</span>
						</div>
					</h2>
					<p class="lead">当ホームページをご覧いただきありがとうございます。弊社、札幌宅商は「総合力の不動産会社」として売買から賃貸、リフォーム、管理、保険まで一括してご案内、ご提案させていただきます。<br>
					全てのお客様のご希望に沿ったご案内、お客様に感動される接客を心がけてまいります。</p>
				</div>
				<div class="p-home_philosophy__body js-animateblock">
					<ul class="p-home_philosophy__list">
						<li class="p-home_philosophy__item c-pagenavi karitai">
							<a href="<?php echo home_url('/service/karitai/'); ?>" class="p-icon--karitai">
								<figure>
									<div class="mask"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/image_philosophy_01.jpg" alt="" width="100%" class="js-animateblock--image"></div>
									<figcaption>借りたい</figcaption>
								</figure>
							</a>
						</li>
						<li class="p-home_philosophy__item c-pagenavi kaitai">
							<a href="<?php echo home_url('/service/kaitai/'); ?>" class="p-icon--kaitai">
								<figure>
									<div class="mask"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/image_philosophy_02.jpg" alt="" width="100%" class="js-animateblock--image"></div>
									<figcaption>買いたい</figcaption>
								</figure>
							</a>
						</li>
						<li class="p-home_philosophy__item c-pagenavi kashitai">
							<a href="<?php echo home_url('/service/kashitai/'); ?>" class="p-icon--kashitai">
								<figure>
									<div class="mask"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/image_philosophy_03.jpg" alt="" width="100%" class="js-animateblock--image"></div>
									<figcaption>貸したい</figcaption>
								</figure>
							</a>
						</li>
						<li class="p-home_philosophy__item c-pagenavi uritai">
							<a href="<?php echo home_url('/service/uritai/'); ?>" class="p-icon--uritai">
								<figure>
									<div class="mask"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/image_philosophy_04.jpg" alt="" width="100%" class="js-animateblock--image"></div>
									<figcaption>売りたい</figcaption>
								</figure>
							</a>
						</li>
						<li class="p-home_philosophy__item c-pagenavi reform">
							<a href="<?php echo home_url('/service/reform/'); ?>" class="p-icon--reform">
								<figure>
									<div class="mask"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/image_philosophy_05.jpg" alt="" width="100%" class="js-animateblock--image"></div>
									<figcaption>リフォーム</figcaption>
								</figure>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</section>

<?php
	$args = array(
		'post_type' => 'voice',
		'post_status' => 'publish',
		'orderby' => 'post_date',
		'order' => 'DESC',
		'posts_per_page' => 5
	);
	$the_query = new WP_Query( $args );
?>
		<section class="l-home_section p-home_voice">
			<div class="l-home_section__inner p-home_voice__inner">
				<div class="p-home_voice__head js-animateblock">
					<h2 class="heading">
						<div class="elem_en"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/titlt_voice_01.svg" alt="VOICE"></div>
						<div class="elem_jp">感動エピソード紹介</div>
					</h2>
					<p class="lead">お客様からいただいた感動の声の数々を<br>
					札幌宅商のスタッフがご紹介します。</p>
					<div class="p-btn--more white"><div class="inner"><span><a href="<?php echo home_url('/service/voice/'); ?>">一覧を見る<i class="p-icon--arrow_r_01"></i></a></span></div></div>
				</div>
				<div class="p-home_voice__body">
					<ul class="p-home_voice__list">
<?php
	if($the_query->have_posts()): while($the_query->have_posts()) : $the_query->the_post();
	$terms = get_the_terms($post->ID, 'voicecategory');
?>
						<li class="p-home_voice__item c-voice <?php echo esc_html($terms[0]->slug); ?> js-animateblock--scale">
							<a href="<?php print get_permalink( ); ?>">
								<div class="category"><?php echo esc_html($terms[0]->name); ?></div>
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
			</div>
		</section>

		<section class="l-home_section p-home_news">
			<div class="l-home_section__inner p-home_news__inner">
				<div class="p-home_news__head js-animateblock">
					<h2 class="p-sub_heading">
						<div class="elem_en">NEWS &amp;<br class="tablet_none">TOPICS</div>
						<div class="elem_jp">オススメ物件情報</div>
					</h2>
					<div class="p-btn--more"><div class="inner"><span><a href="<?php echo home_url('/service/news/'); ?>">一覧を見る<i class="p-icon--arrow_r_01"></i></a></span></div></div>
				</div>
<?php
	$args = array(
		'post_type' => 'post',
		'post_status' => 'publish',
		'orderby' => 'post_date',
		'order' => 'DESC',
		'posts_per_page' => 3,
		'category_name' => 'recommended'
	);
	$the_query = new WP_Query( $args );
?>
				<div class="p-home_news__body js-animateblock">
					<ul class="p-home_news__list">
<?php
	if($the_query->have_posts()): while($the_query->have_posts()) : $the_query->the_post();
	$cat = get_the_category();
	$cat_name = $cat[0]->cat_name;
?>
						<li class="p-home_news__item">
							<a href="<?php print get_permalink( ); ?>">
								<div class="p-home_news__photo">
									<?php if (has_post_thumbnail()) : ?>
										<?php the_post_thumbnail('property_thumb'); ?>
									<?php else: ?>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/photo_news_01.jpg" alt="" class="">
									<?php endif; ?>
								</div>
								<div class="p-home_news__content">
									<time class="time"><?php the_time("Y.m.d"); ?></time>
									<h1 class="title">札幌宅商のオススメ物件</h1>
									<p class="lead">
										<?php
											if(mb_strlen($post->post_title, 'UTF-8')>25){
												$title= mb_substr($post->post_title, 0, 25, 'UTF-8');
												echo $title.'…';
											}else{
												echo $post->post_title;
											}
										?>
									</p>
								</div>
							</a>
						</li>
<?php
	endwhile;endif;
	wp_reset_postdata();
?>
					</ul>
				</div>
			</div>
		</section>

		<section class="l-home_section p-home_extra">
			<div class="l-home_section__inner p-home_extra__inner">
				<div class="p-home_extra__body">
					<ul class="p-home_extra__list">
						<li class="p-home_extra__item download">
							<a href="<?php echo home_url('/service/download/'); ?>" class="">
								<figure>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/banner_01.jpg" alt="">
									<figcaption class="title p-icon--download">各種書類ダウンロード</figcaption>
								</figure>
							</a>
						</li>
						<li class="p-home_extra__item information">
							<a href="<?php echo home_url('/service/shopinfo/'); ?>" class="">
								<figure>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/banner_03.jpg" alt="">
									<figcaption class="title p-icon--information">店舗情報</figcaption>
								</figure>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</section>

	</section>
	<!-- //home_content -->
</main>

<?php get_footer('service'); ?>