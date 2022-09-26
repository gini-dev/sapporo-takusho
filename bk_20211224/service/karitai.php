	<main role="main">
		<!-- l-page_content -->
		<section class="l-page_content">

			<div class="l-page_hero js-animateblock">
				<div class="l-page_hero__inner">
					<h2 class="p-heading_hero"><i class="p-icon--karitai"></i><span>借りたい</span></h2>
				</div>
				<div class="topic_path">
					<ul>
						<li><a href="<?php echo home_url('/service/'); ?>">TOP</a></li>
						<li>借りたい</li>
					</ul>
				</div>
			</div>

			<section class="l-page_section p-page_karitai pb0">
				<div class="l-page_section__inner">
					<div class="p-page_sub_section">
						<div class="p-page_sub_section__inner">
							<div class="p-page_sub_section__head">
								<div class="p-page_sub_section__title js-animateblock--reveal">
									<div class="elem_en karitai">SERVE</div>
									<div class="elem_jp karitai">
										<span><b>札幌宅商には</b></span><br>
										<span><b>50年の実績と</b></span><br>
										<span><b>経験があります。</b></span>
									</div>
								</div>
							</div>
							<div class="p-page_sub_section__body js-animateblock">
								<h3 class="p-heading_lv3 karitai">お客様のための物件選びをお手伝いします</h3>
								<p>お客様の希望を叶えるだけでなく、その後の生活も見直した物件をご一緒にお探ししてまいります。</p>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="l-page_section">
				<section class="c-module_new_arrival">
					<div class="c-module_new_arrival__inner">
						<div class="c-module_new_arrival__head js-animateblock">
							<h3 class="heading">
								<div class="elem_en">New Arrival</div>
								<div class="elem_jp">新着物件情報</div>
							</h3>
							<div class="person"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/person_new_arrival_01.png" alt=""></div>
						</div>


						<!-- こだわりURLのロード -->
						<?php
							print file_get_contents('http://rebpo.net/_sapporotakusyo/');
						?>
						<!-- こだわりURLのロード -->


					</div>
				</section>
			</section>



		<form action="" method="get" name="search_form"  target="_blank">
			<input type="hidden" name="def" value="1">
			<section class="l-page_section">
				<section class="c-module_search_rent js-animateblock">
					<div class="c-module_search_rent__inner">
						<div class="c-module_search_rent__wrap">
							<div class="c-module_search_rent__head p-icon--search">
								<h3 class="heading">
									<div class="elem_en">SEARCH RENT</div>
									<div class="elem_jp">賃貸物件検索</div>
								</h3>
							</div>
							<div class="c-module_search_rent__body">
								<div class="p-table__search">
									<dl class="type">
										<dt>- 物件種別</dt>
										<dd>
											<label><input type="checkbox" name="search_type[]" value="1">アパート</label>
											<label><input type="checkbox" name="search_type[]" value="2">マンション</label>
											<label><input type="checkbox" name="search_type[]" value="5">一戸建て</label>
											<label><input type="checkbox" name="search_type[]" value="15">駐車場</label>
<!-- 
											<label><input type="checkbox" name="search_type[]" value="3">テラスハウス</label>
											<label><input type="checkbox" name="search_type[]" value="10">ハイツ</label>
											<label><input type="checkbox" name="search_type[]" value="6">店舗</label>
											<label><input type="checkbox" name="search_type[]" value="7">事務所</label>
											<label><input type="checkbox" name="search_type[]" value="11">コーポ</label>
											<label><input type="checkbox" name="search_type[]" value="4">タウンハウス</label>
											<label><input type="checkbox" name="search_type[]" value="14">下宿</label>
											<label><input type="checkbox" name="search_type[]" value="12">貸家</label>
											<label><input type="checkbox" name="search_type[]" value="13">長屋</label>
											<label><input type="checkbox" name="search_type[]" value="9">学生会館</label>
											<label><input type="checkbox" name="search_type[]" value="8">学生マンション</label>
											<label><input type="checkbox" name="search_type[]" value="99">その他</label>
 -->
										</dd>
									</dl>
									<dl class="area">
										<dt>- エリア／駅</dt>
										<dd>
											<select name="" id="search_kodawari">
												<option value="">指定無し</option>
												<optgroup label="エリア">
													<option value="https://www.sapporotakusho.co.jp/chintai/fw/tyuouku/">中央区</option>
													<option value="https://www.sapporotakusho.co.jp/chintai/fw/kitaku/">北区</option>
													<option value="https://www.sapporotakusho.co.jp/chintai/fw/%E6%9D%B1%E5%8C%BA/">東区</option>
													<option value="https://www.sapporotakusho.co.jp/chintai/fw/shiraishiku/">白石区</option>
													<option value="https://www.sapporotakusho.co.jp/chintai/fw/toyohiraku/">豊平区</option>
													<option value="https://www.sapporotakusho.co.jp/chintai/fw/%E5%8D%97%E5%8C%BA/">南区</option>
													<option value="https://www.sapporotakusho.co.jp/chintai/fw/nishiku/">西区</option>
													<option value="https://www.sapporotakusho.co.jp/chintai/fw/%E5%8E%9A%E5%88%A5%E5%8C%BA/">厚別区</option>
													<option value="https://www.sapporotakusho.co.jp/chintai/fw/%E6%89%8B%E7%A8%B2%E5%8C%BA/">手稲区</option>
													<option value="https://www.sapporotakusho.co.jp/chintai/fw/%E6%B8%85%E7%94%B0%E5%8C%BA/">清田区</option>
												</optgroup>
												<optgroup label="沿線">
													<option value="https://www.sapporotakusho.co.jp/chintai/fw/%E5%8D%97%E5%8C%97%E7%B7%9A/">地下鉄南北線</option>
													<option value="https://www.sapporotakusho.co.jp/chintai/fw/%E6%9D%B1%E8%A5%BF%E7%B7%9A/">地下鉄東西線</option>
													<option value="https://www.sapporotakusho.co.jp/chintai/fw/%E6%9D%B1%E8%B1%8A%E7%B7%9A//">地下鉄東豊線</option>
													<option value="https://www.sapporotakusho.co.jp/chintai/fw/JR/">JR全物件</option>
													<option value="https://www.sapporotakusho.co.jp/chintai/fw/%E6%9C%AD%E5%B9%8C%E5%B8%82%E9%9B%BB/">札幌市電</option>
												</optgroup>
											</select>
										</dd>
									</dl>
									<dl class="floor">
										<dt>- 間取り</dt>
										<dd>
											<select name="search_madori[]" id="">
												<option value="">指定無し</option>
												<option value="1">1ルーム</option>
												<option value="2">1K</option>
												<option value="3">1DK</option>
												<option value="4">1LDK</option>
												<option value="5">2K</option>
												<option value="6">2DK</option>
												<option value="7">2LDK</option>
												<option value="8">3K</option>
												<option value="9">3DK</option>
												<option value="10">3LDK</option>
												<option value="11">4K以上</option>
											</select>
										</dd>
									</dl>
									<dl class="rent">
										<dt>- 家賃検索</dt>
										<dd>
											<select class="" name="search_price">
												<option value="0">指定無し</option>
												<option value="30000">30,000円～</option>
												<option value="35000">35,000円～</option>
												<option value="40000">40,000円～</option>
												<option value="45000">45,000円～</option>
												<option value="50000">50,000円～</option>
												<option value="55000">55,000円～</option>
												<option value="60000">60,000円～</option>
												<option value="65000">65,000円～</option>
												<option value="70000">70,000円～</option>
												<option value="75000">75,000円～</option>
												<option value="80000">80,000円～</option>
												<option value="85000">85,000円～</option>
												<option value="90000">90,000円～</option>
												<option value="95000">95,000円～</option>
												<option value="100000">100,000円～</option>
												<option value="105000">105,000円～</option>
												<option value="110000">110,000円～</option>
												<option value="115000">115,000円～</option>
												<option value="120000">120,000円～</option>
												<option value="125000">125,000円～</option>
												<option value="130000">130,000円～</option>
												<option value="135000">135,000円～</option>
												<option value="140000">140,000円～</option>
												<option value="145000">145,000円～</option>
												<option value="150000">150,000円～</option>
												<option value="155000">155,000円～</option>
												<option value="160000">160,000円～</option>
												<option value="165000">165,000円～</option>
												<option value="170000">170,000円～</option>
												<option value="175000">175,000円～</option>
												<option value="180000">180,000円～</option>
												<option value="185000">185,000円～</option>
												<option value="190000">190,000円～</option>
												<option value="195000">195,000円～</option>
												<option value="200000">200,000円～</option>
											</select>
										</dd>
									</dl>
								</div>
							</div>
						</div>
						<div class="p-btn p-btn--search"><div class="inner"><a href="javascript:void(0);" target="" onclick="search_chintai();">物件検索<i class="p-icon--blank"></i></a></div></div>
					</div>
				</section>
			</section>
		</form>



			<?php //get_template_part('service/searchbox'); ?>

			<section class="l-page_section p-page_choice">
				<div class="p-page_choice__inner">
					<div class="p-page_choice__head js-animateblock">
						<div class="p-page_choice__title p-page_sub_section__title js-animateblock--reveal">
							<div class="elem_en karitai">CHOICE</div>
							<div class="elem_jp karitai">
								<span><b>満足いく物件探しは、</b></span><br>
								<span><b>不動産会社選びが</b></span><br>
									<span><b>とても大切です。</b></span>
							</div>
						</div>
						<div class="p-page_choice__content js-animateblock">
							<h3 class="p-heading_lv3 karitai">不動産業界の常識ではない、<br>
							札幌宅商の当たり前</h3>
							<p>物件を選ぶ前に不動産会社を選ぶことがとても大切になります。
							弊社では会社本位のご案内はせず、お客様からご要望をしっかりとヒアリングし、ご希望に沿った物件へとスムーズにご案内しています。</p>
						</div>
					</div>
					<div class="p-page_choice__image">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/karitai/image_choice_01.jpg" alt="" class="js-animateblock--image">
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
				'terms' => 'karitai',
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
							<li class="p-module_voice__item c-voice karitai js-animateblock--scale">
								<a href="<?php print get_permalink( ); ?>">
									<div class="category">賃貸</div>
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

			<section class="l-page_section pt0 pb0 bg--gray">
				<div class="p-page_service">
					<div class="p-page_service__inner js-animateblock">
						<div class="p-page_service__head">
							<div class="p-page_service__title">
								<div class="elem_en">ONLINE SERVICE</div>
								<div class="p-heading_lv3 karitai">札幌宅商ではオンラインでのお部屋見学・<br>
									重要事項説明に対応しています。</div>
							</div>
							<ul class="p-page_service__list">
								<li><span>オンライン相談・オンライン面談（あらかじめご予約をお願い申し上げます。）</span></li>
								<li><span>オンライン物件内見（お客様はスマートフォンにてご内覧いただきます。）</span></li>
								<li><span>IT重説（店舗にご来店いただかなくても、賃貸借契約が可能です。）</span></li>
							</ul>
							<p class="notes">スマホを使用したオンライン案内が可能となります（居住中・空き予定物件を除く） 利用するビデオ通話（GoogleDuoやfacetime他）は、お客様の端末により対応が異なります。詳しくは、弊社までお問合せください。</p>
						</div>
					</div>
					<div class="p-page_service__image js-animateblock">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/karitai/image_online_service_01.png" alt="">
					</div>
				</div>
			</section>

			<section class="l-page_section pb0">
				<div class="l-page_section__inner">
					<div class="p-page_payment">
						<div class="p-page_payment__head js-animateblock">
							<div class="p-page_payment__title">
								<div class="elem_en">PAYMENT</div>
								<div class="elem_jp">選べる3つのお支払い方法</div>
							</div>
						</div>
						<div class="p-page_payment__inner js-animateblock">
							<div class="p-page_payment__content">
								<p>弊社では以下の3つのお支払い方法からお選びいただけます。</p>
								<ul class="p-page_payment__list">
									<li><span>現金</span></li>
									<li><span>スマホ決済（Ｊ-Coin Pay、ほくほくPay）</span></li>
									<li><span>クレジット決済</span>
										<dl>
											<dt>クレジット決済対応ブランド</dt>
											<dd>VISA、Mastercard、JCB、AMERICAN EXPRESS、Diners Club INTERNATIONAL&reg;</dd>
											<dt>お支払い回数について</dt>
											<dd>
												支払い回数は、カードブランドごとに対応回数が異なります。ご注意ください。
												<ul>
													<li>
														<dl>
															<dt>- 1回払い</dt>
															<dd>VISA、Mastercard、JCB、AMERICAN EXPRESS、Diners Club INTERNATIONAL&reg;</dd>
														</dl>
													</li>
													<li>
														<dl>
															<dt>- ボーナス払い</dt>
															<dd>
																VISA、Mastercard<br>
																<span>利用期間</span>夏：12月16日〜6月15日　/　冬：7月16日〜11月15日
															</dd>
														</dl>
													</li>
													<li>
														<dl>
															<dt>- 2回払い・リボルビング払い・分割払い</dt>
															<dd>
																VISA、Mastercard<br>
																<span>分割可能回数</span>3回、5回、6回、10回、12回、15回、18回、20回、24回
															</dd>
														</dl>
													</li>
												</ul>
											</dd>
										</dl>
									</li>
								</ul>
							</div>
							<div class="p-page_payment__image">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/karitai/icon_payment_01.png" alt="">
							</div>
						</div>

					</div>
				</div>
			</section>

			<section class="p-module_pagenavi">
				<div class="p-module_pagenavi__inner js-animateblock">
					<div class="p-module_pagenavi__list">
						<div class="p-module_pagenavi__item c-pagenavi kaitai">
							<a href="<?php echo home_url('/service/kaitai/'); ?>" class="p-icon--kaitai">
								<figure>
									<div class="mask"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/image_philosophy_02.jpg" alt="" width="100%" class="js-animateblock--image" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/image_philosophy_02.jpg 1x , <?php echo get_template_directory_uri(); ?>/assets/img/common/image_philosophy_02_sp.jpg 768w"></div>
									<figcaption>買いたい</figcaption>
								</figure>
							</a>
						</div>
						<div class="p-module_pagenavi__item c-pagenavi kashitai">
							<a href="<?php echo home_url('/service/kashitai/'); ?>" class="p-icon--kashitai">
								<figure>
									<div class="mask"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/image_philosophy_03.jpg" alt="" width="100%" class="js-animateblock--image" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/image_philosophy_03.jpg 1x , <?php echo get_template_directory_uri(); ?>/assets/img/common/image_philosophy_03_sp.jpg 768w"></div>
									<figcaption>貸したい</figcaption>
								</figure>
							</a>
						</div>
						<div class="p-module_pagenavi__item c-pagenavi uritai">
							<a href="<?php echo home_url('/service/uritai/'); ?>" class="p-icon--uritai">
								<figure>
									<div class="mask"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/image_philosophy_04.jpg" alt="" width="100%" class="js-animateblock--image" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/image_philosophy_04.jpg 1x , <?php echo get_template_directory_uri(); ?>/assets/img/common/image_philosophy_04_sp.jpg 768w"></div>
									<figcaption>売りたい</figcaption>
								</figure>
							</a>
						</div>
						<div class="p-module_pagenavi__item c-pagenavi reform">
							<a href="<?php echo home_url('/service/reform/'); ?>" class="p-icon--reform">
								<figure>
									<div class="mask"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/image_philosophy_05.jpg" alt="" width="100%" class="js-animateblock--image" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/image_philosophy_05.jpg 1x , <?php echo get_template_directory_uri(); ?>/assets/img/common/image_philosophy_05_sp.jpg 768w"></div>
									<figcaption>リフォーム</figcaption>
								</figure>
							</a>
						</div>
					</div>
				</div>
			</section>
		</section>
		<!-- //l-page_content -->
	</main>

	<div class="c-cta">
		<ul class="c-cta__list">
			<li class="c-cta__item info"><a href="https://www.sapporotakusho.co.jp/chintai/" target="_blank">物件情報<i class="p-icon--blank"></i></a></li>
			<li class="c-cta__item request"><a href="<?php echo home_url('/service/request/'); ?>">物件リクエスト</a></li>
		</ul>
	</div>
