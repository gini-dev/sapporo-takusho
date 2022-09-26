	<main role="main">
		<!-- l-page_content -->
		<section class="l-page_content">

			<div class="l-page_hero js-animateblock">
				<div class="l-page_hero__inner">
					<h2 class="p-heading_hero"><i class="p-icon--kaitai"></i><span>買いたい</span></h2>
				</div>
				<div class="topic_path">
					<ul>
						<li><a href="<?php echo home_url('/service/'); ?>">TOP</a></li>
						<li>買いたい</li>
					</ul>
				</div>
			</div>

			<section class="l-page_section pb0">
				<div class="l-page_section__inner">
					<div class="p-page_sub_section">
						<div class="p-page_sub_section__inner">
							<div class="p-page_sub_section__head">
								<div class="p-page_sub_section__title js-animateblock--reveal">
									<div class="elem_en kaitai">ABOUT</div>
									<div class="elem_jp kaitai">
										<span><b>人生の節目を</b></span><br>
										<span><b>幸せで繋ぐ</b></span>
									</div>
								</div>
							</div>
							<div class="p-page_sub_section__body js-animateblock">
								<h3 class="p-heading_lv3 kaitai">はじめての物件購入を<br>
									徹底サポートいたします</h3>
								<p>不動産購入には様々な書類や知識が必要です。<br>
									お客様の一生で一度のお買い物を、不動産のプロとしてサポートさせていただきます。</p>
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
							print file_get_contents('http://bebpo.net/_sapporotakusyo/');
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
									<div class="elem_en">SEARCH BUYSELL</div>
									<div class="elem_jp">売買物件検索</div>
								</h3>
							</div>
							<div class="c-module_search_rent__body">
								<div class="p-table__search">
									<dl class="type">
										<dt>- 物件種別</dt>
										<dd>
											<label><input type="radio" name="type" class="baibai_type" value="1001">中古マンション</label>
											<label><input type="radio" name="type" class="baibai_type" value="3000">土地</label>
											<label><input type="radio" name="type" class="baibai_type" value="5999">投資用</label>
											<label><input type="radio" name="type" class="baibai_type" value="4999">事業用物件</label>
											<label><input type="radio" name="type" class="baibai_type" value="2001">中古戸建て</label>
											<label><input type="radio" name="type" class="baibai_type" value="2000">新築戸建て</label>
										</dd>
									</dl>
									<dl class="area">
										<dt>- エリア／駅</dt>
										<dd>
											<select name="" id="search_kodawari">
												<option value="">指定無し</option>
												<optgroup label="エリア" class="type_1001">
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E4%B8%AD%E5%A4%AE%E5%8C%BA/">中央区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E5%8C%97%E5%8C%BA/">北区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E6%9D%B1%E5%8C%BA/">東区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E7%99%BD%E7%9F%B3%E5%8C%BA/">白石区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E8%B1%8A%E5%B9%B3%E5%8C%BA/">豊平区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E5%8D%97%E5%8C%BA/">南区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E8%A5%BF%E5%8C%BA/">西区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E5%8E%9A%E5%88%A5%E5%8C%BA/">厚別区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E6%89%8B%E7%A8%B2%E5%8C%BA/">手稲区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E6%B8%85%E7%94%B0%E5%8C%BA/">清田区</option>
												</optgroup>
												<optgroup label="沿線" class="type_1001">
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E5%8D%97%E5%8C%97%E7%B7%9A/">地下鉄南北線</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E6%9D%B1%E8%A5%BF%E7%B7%9A/">地下鉄東西線</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E6%9D%B1%E8%B1%8A%E7%B7%9A/">地下鉄東豊線</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/JR/">JR全物件</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E6%9C%AD%E5%B9%8C%E5%B8%82%E9%9B%BB/">札幌市電</option>
												</optgroup>
												<optgroup label="エリア" class="type_3000">
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E4%B8%AD%E5%A4%AE%E5%8C%BA1/">中央区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E5%8C%97%E5%8C%BA1/">北区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E6%9D%B1%E5%8C%BA1/">東区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E7%99%BD%E7%9F%B3%E5%8C%BA1/">白石区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E8%B1%8A%E5%B9%B3%E5%8C%BA1/">豊平区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E5%8D%97%E5%8C%BA1/">南区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E8%A5%BF%E5%8C%BA1/">西区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E5%8E%9A%E5%88%A5%E5%8C%BA1/">厚別区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E6%89%8B%E7%A8%B2%E5%8C%BA1/">手稲区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E6%B8%85%E7%94%B0%E5%8C%BA1/">清田区</option>
												</optgroup>
												<optgroup label="沿線" class="type_3000">
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E5%8D%97%E5%8C%97%E7%B7%9A1/">地下鉄南北線</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E6%9D%B1%E8%A5%BF%E7%B7%9A1/">地下鉄東西線</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E6%9D%B1%E8%B1%8A%E7%B7%9A1/">地下鉄東豊線</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/JR1/">JR全物件</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E6%9C%AD%E5%B9%8C%E5%B8%82%E9%9B%BB1/">札幌市電</option>
												</optgroup>
												<optgroup label="エリア" class="type_5999">
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E4%B8%AD%E5%A4%AE%E5%8C%BA2/">中央区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E5%8C%97%E5%8C%BA2/">北区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E6%9D%B1%E5%8C%BA2/">東区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E7%99%BD%E7%9F%B3%E5%8C%BA2/">白石区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E8%B1%8A%E5%B9%B3%E5%8C%BA2/">豊平区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E5%8D%97%E5%8C%BA2/">南区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E8%A5%BF%E5%8C%BA2/">西区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E5%8E%9A%E5%88%A5%E5%8C%BA2/">厚別区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E6%89%8B%E7%A8%B2%E5%8C%BA2/">手稲区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E6%B8%85%E7%94%B0%E5%8C%BA2/">清田区</option>
												</optgroup>
												<optgroup label="沿線" class="type_5999">
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E5%8D%97%E5%8C%97%E7%B7%9A2/">地下鉄南北線</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E6%9D%B1%E8%A5%BF%E7%B7%9A2/">地下鉄東西線</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E6%9D%B1%E8%B1%8A%E7%B7%9A2/">地下鉄東豊線</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/JR2/">JR全物件</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E6%9C%AD%E5%B9%8C%E5%B8%82%E9%9B%BB2/">札幌市電</option>
												</optgroup>
												<optgroup label="エリア" class="type_4999">
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E4%B8%AD%E5%A4%AE%E5%8C%BA3/">中央区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E5%8C%97%E5%8C%BA3/">北区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E6%9D%B1%E5%8C%BA3/">東区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E7%99%BD%E7%9F%B3%E5%8C%BA3/">白石区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E8%B1%8A%E5%B9%B3%E5%8C%BA3/">豊平区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E5%8D%97%E5%8C%BA3/">南区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E8%A5%BF%E5%8C%BA3/">西区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E5%8E%9A%E5%88%A5%E5%8C%BA3/">厚別区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E6%89%8B%E7%A8%B2%E5%8C%BA3/">手稲区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E6%B8%85%E7%94%B0%E5%8C%BA3/">清田区</option>
												</optgroup>
												<optgroup label="沿線" class="type_4999">
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E5%8D%97%E5%8C%97%E7%B7%9A3/">地下鉄南北線</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E6%9D%B1%E8%A5%BF%E7%B7%9A3/">地下鉄東西線</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E6%9D%B1%E8%B1%8A%E7%B7%9A3/">地下鉄東豊線</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/JR3/">JR全物件</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E6%9C%AD%E5%B9%8C%E5%B8%82%E9%9B%BB3/">札幌市電</option>
												</optgroup>
												<optgroup label="エリア" class="type_2001">
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E4%B8%AD%E5%A4%AE%E5%8C%BA4/">中央区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E5%8C%97%E5%8C%BA4/">北区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E6%9D%B1%E5%8C%BA4/">東区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E7%99%BD%E7%9F%B3%E5%8C%BA4/">白石区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E8%B1%8A%E5%B9%B3%E5%8C%BA4/">豊平区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E5%8D%97%E5%8C%BA4/">南区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E8%A5%BF%E5%8C%BA4/">西区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E5%8E%9A%E5%88%A5%E5%8C%BA4/">厚別区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E6%89%8B%E7%A8%B2%E5%8C%BA4/">手稲区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E6%B8%85%E7%94%B0%E5%8C%BA4/">清田区</option>
												</optgroup>
												<optgroup label="沿線" class="type_2001">
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E5%8D%97%E5%8C%97%E7%B7%9A4/">地下鉄南北線</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E6%9D%B1%E8%A5%BF%E7%B7%9A4/">地下鉄東西線</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E6%9D%B1%E8%B1%8A%E7%B7%9A4/">地下鉄東豊線</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/JR4/">JR全物件</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E6%9C%AD%E5%B9%8C%E5%B8%82%E9%9B%BB4/">札幌市電</option>
												</optgroup>
												<optgroup label="エリア" class="type_2000">
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E4%B8%AD%E5%A4%AE%E5%8C%BA5/">中央区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E5%8C%97%E5%8C%BA5/">北区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E6%9D%B1%E5%8C%BA5/">東区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E7%99%BD%E7%9F%B3%E5%8C%BA5/">白石区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E8%B1%8A%E5%B9%B3%E5%8C%BA5/">豊平区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E5%8D%97%E5%8C%BA5/">南区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E8%A5%BF%E5%8C%BA5/">西区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E5%8E%9A%E5%88%A5%E5%8C%BA5/">厚別区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E6%89%8B%E7%A8%B2%E5%8C%BA5/">手稲区</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E6%B8%85%E7%94%B0%E5%8C%BA5/">清田区</option>
												</optgroup>
												<optgroup label="沿線" class="type_2000">
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E5%8D%97%E5%8C%97%E7%B7%9A5/">地下鉄南北線</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E6%9D%B1%E8%A5%BF%E7%B7%9A5/">地下鉄東西線</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E6%9D%B1%E8%B1%8A%E7%B7%9A5/">地下鉄東豊線</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/JR5/">JR全物件</option>
													<option value="https://www.sapporotakusho.co.jp/baibai/fw/%E6%9C%AD%E5%B9%8C%E5%B8%82%E9%9B%BB5/">札幌市電</option>
												</optgroup>
											</select>
										</dd>
									</dl>
									<dl class="floor madori_block">
										<dt>- 間取り</dt>
										<dd>
											<select name="search_madori[]" id="search_madori">
												<option value="">指定無し</option>
												<option value="1">1ルーム</option>
												<option value="2">1K</option>
												<option value="4">1DK</option>
												<option value="8">1LDK</option>
												<option value="10">2K</option>
												<option value="12">2DK</option>
												<option value="16">2LDK</option>
												<option value="18">3K</option>
												<option value="20">3DK</option>
												<option value="24">3LDK</option>
												<option value="26">4K以上</option>
<!-- 
												<option value="3">1SK</option>
												<option value="5">1SDK</option>
												<option value="6">1LK</option>
												<option value="7">1SLK</option>
												<option value="9">1SLDK</option>
												<option value="11">2SK</option>
												<option value="13">2SDK</option>
												<option value="14">2LK</option>
												<option value="15">2SLK</option>
												<option value="17">2SLDK</option>
												<option value="19">3SK</option>
												<option value="21">3SDK</option>
												<option value="22">3LK</option>
												<option value="23">3SLK</option>
												<option value="25">3SLDK</option>
 -->
											</select>
										</dd>
									</dl>
									<dl class="rent">
										<dt>- 価格</dt>
										<dd>
											<select class="" name="search_price">
												<option value="">指定無し</option>
												<option value="250">250万円～</option>
												<option value="500">500万円～</option>
												<option value="750">750万円～</option>
												<option value="1000">1,000万円～</option>
												<option value="1250">1,250万円～</option>
												<option value="1500">1,500万円～</option>
												<option value="1750">1,750万円～</option>
												<option value="2000">2,000万円～</option>
												<option value="2250">2,250万円～</option>
												<option value="2500">2,500万円～</option>
												<option value="2750">2,750万円～</option>
												<option value="3000">3,000万円～</option>
												<option value="3250">3,250万円～</option>
												<option value="3500">3,500万円～</option>
												<option value="3750">3,750万円～</option>
												<option value="4000">4,000万円～</option>
												<option value="4250">4,250万円～</option>
												<option value="4500">4,500万円～</option>
												<option value="4750">4,750万円～</option>
												<option value="5000">5,000万円～</option>
												<option value="5250">5,250万円～</option>
												<option value="5500">5,500万円～</option>
												<option value="5750">5,750万円～</option>
												<option value="6000">6,000万円～</option>
												<option value="6250">6,250万円～</option>
												<option value="6500">6,500万円～</option>
												<option value="6750">6,750万円～</option>
												<option value="7000">7,000万円～</option>
												<option value="7250">7,250万円～</option>
												<option value="7500">7,500万円～</option>
												<option value="7750">7,750万円～</option>
												<option value="8000">8,000万円～</option>
												<option value="8250">8,250万円～</option>
												<option value="8500">8,500万円～</option>
												<option value="8750">8,750万円～</option>
												<option value="9000">9,000万円～</option>
												<option value="9250">9,250万円～</option>
												<option value="9500">9,500万円～</option>
												<option value="9750">9,750万円～</option>
												<option value="10000">1億円～</option>
											</select>
										</dd>
									</dl>
								</div>
							</div>
						</div>
						<div class="p-btn p-btn--search"><div class="inner"><a href="javascript:void(0);" target="" onclick="search_baibai();">物件検索<i class="p-icon--blank"></i></a></div></div>
					</div>
				</section>
			</section>
		</form>



			<?php //get_template_part('service/searchbox2'); ?>

			<section class="l-page_section">
				<div class="p-module_message">
					<div class="p-module_message__head">
						<div class="p-page_sub_section__title js-animateblock--reveal">
							<div class="elem_en kaitai">CAUTIONARY POINTS</div>
							<div class="elem_jp kaitai">
								<span><b>物件購入に失敗しないための5つの注意点</b></span>
							</div>
						</div>
					</div>
					<div class="p-module_message__body">
						<div class="p-module_message__wrap">
							<div class="p-module_message__inner js-animateblock">
								<div class="p-module_message__column">
									<div class="p-module_message__column__inner">
										<div class="p-module_message__column__content">
											<div class="lead"><i class="p-icon--check kaitai"></i>Point 01</div>
											<h3 class="p-heading_lv3 kaitai">ローンや保険など、諸費用について</h3>
											<p>物件購入の際に考えなければいけない最も大事なことは「お金」のことです。頭金のことや、月々のローンの金額、購入後にかかる費用など、きちんと計画を立てて無用なトラブルを招くことがないよう注意することが重要です。</p>
											<!--div class="p-btn--more kaitai-link"><div class="inner"><span><a href="<?php echo home_url(''); ?>">詳しくはこちら<i class="p-icon--arrow_r_01"></i></a></span></div></div-->
										</div>
										<div class="p-module_message__column__image">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/kaitai/image_point_01.jpg" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="p-module_message__wrap">
							<div class="p-module_message__inner js-animateblock">
								<div class="p-module_message__column">
									<div class="p-module_message__column__inner">
										<div class="p-module_message__column__content">
											<div class="lead"><i class="p-icon--check kaitai"></i>Point 02</div>
											<h3 class="p-heading_lv3 kaitai">ライフスタイルに合った立地選び</h3>
											<p>通勤や通学、毎日のお買い物などの交通の利便性の他、その地域の特徴や治安などを加味した上で、引越し後の暮らしを想定しながら慎重に決定する必要があります。</p>
											<!--div class="p-btn--more kaitai-link"><div class="inner"><span><a href="<?php echo home_url(''); ?>">詳しくはこちら<i class="p-icon--arrow_r_01"></i></a></span></div></div-->
										</div>
										<div class="p-module_message__column__image">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/kaitai/image_point_02.jpg" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="p-module_message__wrap">
							<div class="p-module_message__inner js-animateblock">
								<div class="p-module_message__column">
									<div class="p-module_message__column__inner">
										<div class="p-module_message__column__content">
											<div class="lead"><i class="p-icon--check kaitai"></i>Point 03</div>
											<h3 class="p-heading_lv3 kaitai">一戸建てとマンション新築・中古について</h3>
											<p>それぞれのメリットとデメリットをしっかりと比較検討し、自分に本当にあっている物件を見極めることが重要です。価格の高さ、古い新しいなどの表面的なものだけではなく、多角的に物件を見て判断しましょう。</p>
											<!--div class="p-btn--more kaitai-link"><div class="inner"><span><a href="<?php echo home_url(''); ?>">詳しくはこちら<i class="p-icon--arrow_r_01"></i></a></span></div></div-->
										</div>
										<div class="p-module_message__column__image">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/kaitai/image_point_03.jpg" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="p-module_message__wrap">
							<div class="p-module_message__inner js-animateblock">
								<div class="p-module_message__column">
									<div class="p-module_message__column__inner">
										<div class="p-module_message__column__content">
											<div class="lead"><i class="p-icon--check kaitai"></i>Point 04</div>
											<h3 class="p-heading_lv3 kaitai">将来を見据えた間取りや設備選び</h3>
											<p>物件購入は、人生の一大イベントです。結婚、出産、両親との同居など、将来的な家族構成の変化を見据えた上で、ライフスタイルのフェーズ毎にどのように対応していくのか、計画を立てましょう。</p>
											<!--div class="p-btn--more kaitai-link"><div class="inner"><span><a href="<?php echo home_url(''); ?>">詳しくはこちら<i class="p-icon--arrow_r_01"></i></a></span></div></div-->
										</div>
										<div class="p-module_message__column__image">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/kaitai/image_point_04.jpg" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="p-module_message__wrap">
							<div class="p-module_message__inner js-animateblock">
								<div class="p-module_message__column">
									<div class="p-module_message__column__inner">
										<div class="p-module_message__column__content">
											<div class="lead"><i class="p-icon--check kaitai"></i>Point 05</div>
											<h3 class="p-heading_lv3 kaitai">不動産会社との綿密なコミュニケーション</h3>
											<p>自分だけで専門的なことを調べるのは、どうしても限界があります。そこで、不動産会社の担当者に聞いたり、調査を依頼したりと、不動産会社の持っている情報を最大限活用するためにも、綿密なコミュニケーションが必要です。</p>
											<!--div class="p-btn--more kaitai-link"><div class="inner"><span><a href="<?php echo home_url(''); ?>">詳しくはこちら<i class="p-icon--arrow_r_01"></i></a></span></div></div-->
										</div>
										<div class="p-module_message__column__image">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/kaitai/image_point_05.jpg" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="l-page_section bg--gray">
				<div class="c-module_point">
					<div class="c-module_point__head">
						<div class="p-page_sub_section__title js-animateblock--reveal">
							<div class="elem_en kaitai">MERIT</div>
							<div class="elem_jp kaitai">
								<span><b>札幌宅商から購入する8つのメリット</b></span>
							</div>
							<div class="case-title">
								<p>Case1</p>
								<h4><span>当社グループ売主物件を購入</span>する場合の<span>4つ</span>のメリット</h4>
							</div>
						</div>
					</div>
					<div class="c-module_point__body">
						<div class="c-module_point__wrap">
							<div class="c-module_point__inner js-animateblock">
								<div class="c-module_point__icon kaitai"><div class="c-module_point__icon__inner">Merit<b>01</b></div></div>
								<div class="c-module_point__column">
									<div class="c-module_point__column__inner">
										<div class="c-module_point__column__content">
											<h3 class="p-heading_lv3 kaitai">選べるシリーズ</h3>
											<h4 class="p-heading_lv4">新築住宅のような感覚で、キッチンや浴室、<br>
												玄関収納など自由に選べます。</h4>
											<p>札幌宅商の「選べるシリーズ」は、基本プランの設備とグレードアップができるプランもご用意しています。<br>
												グレートアップした追加料金も住宅ローン借入が可能で、お客様のライフスタイルに合った住まい作りが可能です。</p>
											<!--div class="p-btn--more kaitai-link"><div class="inner"><span><a href="<?php echo home_url(''); ?>">詳しくはこちら<i class="p-icon--arrow_r_01"></i></a></span></div></div-->
										</div>
										<div class="c-module_point__column__image">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/kaitai/image_merit_01.jpg" alt="">
										</div>
									</div>
								</div>
							</div>
							<div class="c-module_point__inner js-animateblock">
								<div class="c-module_point__icon kaitai"><div class="c-module_point__icon__inner">Merit<b>02</b></div></div>
								<div class="c-module_point__column">
									<div class="c-module_point__column__inner">
										<div class="c-module_point__column__content">
											<h3 class="p-heading_lv3 kaitai">充実保証</h3>
											<h4 class="p-heading_lv4">安心・充実のアフターケア</h4>
											<p>建物内の付帯設備に関し、お引き渡しから90日間の保証サービスをしております。物件お引き渡し後、住宅内外の不具合が発生した場合、当社規定による内容にて迅速に対応します。</p>
											<div class="pdf-links">
												<a href="<?php echo get_template_directory_uri(); ?>/pdf/kaitai-pdf1.pdf" target="_blank">設備機器(戸建て用)</a>
												<a href="<?php echo get_template_directory_uri(); ?>/pdf/kaitai-pdf2.pdf" target="_blank">設備保証書(マンション用)</a>
												<a href="<?php echo get_template_directory_uri(); ?>/pdf/kaitai-pdf3.pdf" target="_blank">設備保証書(戸建て用)</a>
												<a href="<?php echo get_template_directory_uri(); ?>/pdf/kaitai-pdf4.pdf" target="_blank">設備保証書(新築戸建て用)</a>
											</div>
										</div>
										<div class="c-module_point__column__image">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/kaitai/image_merit_09.jpg" alt="">
										</div>
									</div>
								</div>
							</div>
							<div class="c-module_point__inner js-animateblock">
								<div class="c-module_point__icon kaitai"><div class="c-module_point__icon__inner">Merit<b>03</b></div></div>
								<div class="c-module_point__column">
									<div class="c-module_point__column__inner">
										<div class="c-module_point__column__content">
											<h3 class="p-heading_lv3 kaitai">定期訪問</h3>
											<h4 class="p-heading_lv4">アフターメンテナンス</h4>
											<p>物件のお引き渡し後は、定期的にご住宅へ訪問いたします。軽微な不具合・故障は訪問担当者へお気軽にご相談ください。状態を確認し各業者様への手配や工事のご提案をさせていただきます。</p>
										</div>
										<div class="c-module_point__column__image">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/kaitai/image_merit_03.jpg" alt="">
										</div>
									</div>
								</div>
							</div>
							<div class="c-module_point__inner js-animateblock">
								<div class="c-module_point__icon kaitai"><div class="c-module_point__icon__inner">Merit<b>04</b></div></div>
								<div class="c-module_point__column">
									<div class="c-module_point__column__inner">
										<div class="c-module_point__column__content">
											<h3 class="p-heading_lv3 kaitai">新築建売</h3>
											<h4 class="p-heading_lv4">独自のプランニング</h4>
											<p>
												デザイナーやインテリアコーディネーターと協力して、生活者目線に立った間取りや内装を実現します。<br>
												またメンテナンスに関しても、将来想定される修繕やお子様の成長などに合わせたライフプランニングを、資金計画等も含め売却後も継続的にサポートし、長く住める家づくりを目指します。
											</p>
										</div>
										<div class="c-module_point__column__image">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/kaitai/image_merit_04.jpg" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="c-module_point">
					<div class="c-module_point__head">
						<div class="p-page_sub_section__title js-animateblock--reveal">
							<div class="case-title case2">
								<p>Case2</p>
								<h4><span>札幌宅商に仲介を依頼</span>する場合の<span>4つ</span>のメリット</h4>
							</div>
						</div>
					</div>
					<div class="c-module_point__body">
						<div class="c-module_point__wrap">
							<div class="c-module_point__inner js-animateblock">
								<div class="c-module_point__icon kaitai"><div class="c-module_point__icon__inner">Merit<b>01</b></div></div>
								<div class="c-module_point__column">
									<div class="c-module_point__column__inner">
										<div class="c-module_point__column__content">
											<h3 class="p-heading_lv3 kaitai">建物状況調査</h3>
											<h4 class="p-heading_lv4">SSS（Sapporo Takusho Safety Support）</h4>
											<p>売主様がご自宅のインスペクション（建物状況調査）を検査機関に依頼する際、その調査費用を弊社が負担させていただきます。<br>
											※引受には当社規定の条件がございます。</p>
										</div>
										<div class="c-module_point__column__image">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/kaitai/image_merit_05.jpg" alt="">
										</div>
									</div>
								</div>
							</div>
							<div class="c-module_point__inner js-animateblock">
								<div class="c-module_point__icon kaitai"><div class="c-module_point__icon__inner">Merit<b>02</b></div></div>
								<div class="c-module_point__column">
									<div class="c-module_point__column__inner">
										<div class="c-module_point__column__content">
											<h3 class="p-heading_lv3 kaitai">オンライン内見・IT重説</h3>
											<h4 class="p-heading_lv4">ご自宅で物件内見・売買契約が可能に！</h4>
											<ul class="point kaitai">
												<li>
													<dl>
														<dt>オンライン相談・オンライン面談</dt>
														<dd>（あらかじめご予約をお願い申し上げます。）</dd>
													</dl>
												</li>
												<li>
													<dl>
														<dt>オンライン物件内見</dt>
														<dd>（お客様はスマートフォンにてご内覧いただきます。）</dd>
													</dl>
												</li>
												<li>
													<dl>
														<dt>IT重説</dt>
														<dd>（店舗にご来店いただかなくても、売買契約が可能です。）</dd>
													</dl>
													<p class="note">
														スマホを使用したオンライン案内が可能となります（居住中・空き予定物件を除く） 利用するビデオ通話（GoogleDuoやfacetime他）は、お客様の端末により対応が異なります。詳しくは、弊社までお問合せください。
													</p>
												</li>
											</ul>
										</div>
										<div class="c-module_point__column__image">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/kaitai/image_merit_06.jpg" alt="">
										</div>
									</div>
								</div>
							</div>
							<div class="c-module_point__inner js-animateblock">
								<div class="c-module_point__icon kaitai"><div class="c-module_point__icon__inner">Merit<b>03</b></div></div>
								<div class="c-module_point__column">
									<div class="c-module_point__column__inner">
										<div class="c-module_point__column__content">
											<h3 class="p-heading_lv3 kaitai">仲介プラスリフォーム</h3>
											<h4 class="p-heading_lv4">バリューUPリフォームサービス</h4>
											<p>弊社にて簡単な補修工事から、大規模なリフォーム工事まで様々なリフォームプランを無料で作成いたします。お手持ちの資産を有効活用できるよう最良のご提案をします。</p>
										</div>
										<div class="c-module_point__column__image">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/kaitai/image_merit_07.jpg" alt="">
										</div>
									</div>
								</div>
							</div>
							<div class="c-module_point__inner js-animateblock">
								<div class="c-module_point__icon kaitai"><div class="c-module_point__icon__inner">Merit<b>04</b></div></div>
								<div class="c-module_point__column">
									<div class="c-module_point__column__inner">
										<div class="c-module_point__column__content">
											<h3 class="p-heading_lv3 kaitai">住み替えローン</h3>
											<h4 class="p-heading_lv4">既存の住宅ローンがある方もスムーズに住み替えできるようサポート</h4>
											<p>今の自宅を当社の買取保証で付保することにより安心の住み替えを実現。また自宅の販売活動と並行して住み替え先を検討することや、万一売却が決まっていない場合でも新規ローンの相談も可能です。</p>
											<p class="note">買取には一定の条件があり、条件に満たない場合には買い取れない場合もあります。</p>
										</div>
										<div class="c-module_point__column__image">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/kaitai/image_merit_08.jpg" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="l-page_section melit-area kaitai-page">
				<div class="c-module_point">
					<div class="c-melit_body">
						<div class="c-module_point__wrap">
							<h2>不動産経営をご検討中のお客様へ</h2>
							<div class="c-module_point__inner js-animateblock">
								<div class="c-module_point__icon"><div class="c-module_point__icon__inner">Point<b>01</b></div></div>
								<div class="c-module_point__column">
									<div class="c-module_point__column__inner">
										<div class="c-module_point__column__content">
											<h3 class="p-heading_lv3">お客様のご要望に応じた物件をご提案いたします</h3>
											<h4 class="p-heading_lv4">お客様のニーズに添ったご提案をお約束します</h4>
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
			<section class="l-page_section pb0">
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

			<section class="p-module_pagenavi">
				<div class="p-module_pagenavi__inner js-animateblock">
					<div class="p-module_pagenavi__list">
						<div class="p-module_pagenavi__item c-pagenavi karitai">
							<a href="<?php echo home_url('/service/karitai/'); ?>" class="p-icon--karitai">
								<figure>
									<div class="mask"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/image_philosophy_01.jpg" alt="" width="100%" class="js-animateblock--image" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/image_philosophy_01.jpg 1x , <?php echo get_template_directory_uri(); ?>/assets/img/common/image_philosophy_01_sp.jpg 768w"></div>
									<figcaption>借りたい</figcaption>
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
			<li class="c-cta__item info"><a href="https://www.sapporotakusho.co.jp/baibai/" target="_blank">物件情報<i class="p-icon--blank"></i></a></li>
			<li class="c-cta__item request"><a href="<?php echo home_url('/service/request/'); ?>">物件リクエスト</a></li>
		</ul>
	</div>
