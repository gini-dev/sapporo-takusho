	<main role="main">
		<!-- l-page_content -->
		<section class="l-page_content">

			<div class="l-page_head">
				<div class="l-page_head__inner">
					<h2 class="p-heading_lv1">成約者様アンケート</h2>
				</div>
				<div class="topic_path">
					<ul>
						<li><a href="<?php echo home_url('/service/'); ?>">TOP</a></li>
						<li>成約者様アンケート</li>
					</ul>
				</div>
			</div>

			<section class="l-page_section pb0">
				<div class="p-page_survey">
					<div class="l-page_section__inner">
						<div class="p-page_survey__head">
							<h3 class="p-page_survey__title">アンケートにお答えください</h3>
							<p>札幌宅商では「お客様の声」を経営に最大限反映させるために、郵送させていただいております「リターンレター」及び当WEBサイトの「成約者様アンケート」などから、お客様の貴重な生のご意見を迅速に取り入れ、問題点や課題を見つけ即時改善を行ってまいります。より多くのお客様の声に耳を傾け、積極的にお応えするための体制づくりを進めながら、今後もお客様の声を大切にし、サービス改善に向けた環境づくりに努めていきますので、お客様のご理解とご協力の程、何卒よろしくお願いいたします。</p>
						</div>
					</div>
					<div class="p-page_survey__body bg--gray">
						<ul class="p-radio">
							<li class="p-radio--karitai"><a href="<?php echo home_url('/service/survey/rental-survey/'); ?>" class="<?php if(is_page('rental-survey')){print 'selected';} ?>">借主様</a></li>
							<li class="p-radio--rent"><a href="<?php echo home_url('/service/survey/rent-survey/'); ?>" class="<?php if(is_page('rent-survey')){print 'selected';} ?>">貸主様</a></li>
							<li class="p-radio--kaitai"><a href="<?php echo home_url('/service/survey/purchase-survey/'); ?>" class="<?php if(is_page('purchase-survey')){print 'selected';} ?>">買主様</a></li>
							<li class="p-radio--uritai"><a href="<?php echo home_url('/service/survey/sale-survey/'); ?>" class="<?php if(is_page('sale-survey')){print 'selected';} ?>">売主様</a></li>
							<li class="p-radio--reform"><a href="<?php echo home_url('/service/survey/reform-survey/'); ?>" class="<?php if(is_page('reform-survey')){print 'selected';} ?>">リフォーム</a></li>
						</ul>
						<?php if(have_posts()):while(have_posts()):the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile;endif; ?>
					</div>
				</div>
			</section>

		</section>
		<!-- //l-page_content -->
	</main>
