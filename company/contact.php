<div class="txt-mv rel">
	<h1 class="page-title mont">Contact</h1>
	<div class="page-title-ja">お問い合わせ</div>
</div><!-- /.txt-mv -->

<div class="main-contents contact">
	<section class="contact-area">
		<div class="inner">
			<div class="contact-flex-links flex jc-center">
				<a href="<?php echo home_url('/company/contact/'); ?>" class="active">会社・サービスに関するお問い合わせ</a>
				<a href="<?php echo home_url('/company/recruit-contact/'); ?>" class="">採用に関するお問い合わせ</a>
			</div>
			<div class="bg-gray">
				<?php if(have_posts()):while(have_posts()):the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile;endif; ?>
			</div><!-- /.bg-gray -->
		</div><!-- /.inner -->
	</section><!-- /.about-link-area -->
</div><!-- /.main-contents -->
