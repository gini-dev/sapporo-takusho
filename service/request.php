	<main role="main">
		<!-- l-page_content -->
		<section class="l-page_content">

			<div class="l-page_head">
				<div class="l-page_head__inner">
					<h2 class="p-heading_lv1">物件リクエスト</h2>
				</div>
				<div class="topic_path">
					<ul>
						<li><a href="<?php echo home_url('/service/'); ?>">TOP</a></li>
						<li>物件リクエスト</li>
					</ul>
				</div>
			</div>

			<section class="l-page_section">
				<div class="l-page_section__inner wide">
					<div class="p-page_request">
						<ul class="p-radio">
							<li class="p-radio--karitai"><a href="<?php echo home_url('/service/request/rental/'); ?>" class="<?php if(is_page('rental')){print 'selected';} ?>">賃貸物件</a></li>
							<li class="p-radio--kaitai"><a href="<?php echo home_url('/service/request/purchase/'); ?>" class="<?php if(is_page('purchase')){print 'selected';} ?>">物件購入</a></li>
							<li class="p-radio--uritai"><a href="<?php echo home_url('/service/request/sale/'); ?>" class="<?php if(is_page('sale')){print 'selected';} ?>">物件売却</a></li>
							<li class="p-radio--reform"><a href="<?php echo home_url('/service/request/reform-request/'); ?>" class="<?php if(is_page('reform-request')){print 'selected';} ?>">リフォーム</a></li>
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
