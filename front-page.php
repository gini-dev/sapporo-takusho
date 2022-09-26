<?php get_header(); ?>
<div class="top-main rel">
	<div class="mv-mov">
		<video loop autoplay muted poster="<?php echo get_template_directory_uri(); ?>/top-assets/images/bg_pc.jpg" id="bgvid" class="pc">
			<source src="<?php echo get_template_directory_uri(); ?>/top-assets/mov/bg_pc.mp4" type="video/mp4">
		</video>
		<video loop autoplay muted poster="<?php echo get_template_directory_uri(); ?>/top-assets/images/bg_pc.jpg" id="bgvid" class="sp">
			<source src="<?php echo get_template_directory_uri(); ?>/top-assets/mov/bg_sp.mp4" type="video/mp4">
		</video>
	</div>
	<div class="center-cont v-center">
		<div class="inner">
			<h1 class="logo"><img src="<?php echo get_template_directory_uri(); ?>/top-assets/images/logo_50th.svg" alt="札幌宅商グループ"></h1>
			<div class="flex link-flex">
				<div class="blo rel"><a href="<?php echo home_url('/service/'); ?>">
					<span class="col-border1"></span>
					<span class="col-border2"></span>
					<h2 class="txt-center trance">賃貸、売買、リフォームを<br>ご検討のお客様はこちら</h2>
					<p>お客様向けサイト</p>
				</a></div><!-- /.blo -->
				<div class="blo rel"><a href="<?php echo home_url('/company/'); ?>">
					<span class="col-border1"></span>
					<span class="col-border2"></span>
					<h2 class="txt-center trance">スタッフ情報や<br>企業情報の掲載はこちら</h2>
					<p class="txt-center">企業情報サイト</p>
				</a></div><!-- /.blo -->
			</div><!-- /.link-flex -->
		</div><!-- /.inner -->
	</div><!-- /.center-cont -->
	<p class="copy mont">CopyRight&copy;  [ 札幌宅商株式会社 ] All rights reserved</p>
</div><!-- /.top-main -->
<?php get_footer(); ?>