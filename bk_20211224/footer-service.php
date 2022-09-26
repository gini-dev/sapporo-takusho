<footer class="l-site_footer">
	<div class="page_top"><a href="#" onclick="HARIOS.useful.jumpToPageTop();return false;"></a></div>
	<div class="l-site_footer__inner">
		<div class="l-site_footer__nav">
			<div class="l-site_footer__nav__head">
				<div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo_w_01.svg" alt="since 1971 SAPPORO TAKUSHO GROUP" width="230"></div>
				<div class="p-btn p-btn--secondary"><div class="inner"><a href="<?php echo home_url('/company/'); ?>" target="_blank">企業情報サイト<i class="p-icon--blank"></i></a></div></div>
			</div>
			<div class="l-site_footer__nav__list">
				<ul class="l-site_footer__nav__list__lv1">
					<li><a href="<?php echo home_url('/service/karitai/'); ?>" class="p-icon--arrow_r_03">借りたい</a></li>
					<li><a href="<?php echo home_url('/service/kashitai/'); ?>" class="p-icon--arrow_r_03">貸したい</a></li>
					<li><a href="<?php echo home_url('/service/kaitai/'); ?>" class="p-icon--arrow_r_03">買いたい</a></li>
					<li><a href="<?php echo home_url('/service/uritai/'); ?>" class="p-icon--arrow_r_03">売りたい</a></li>
					<li>
						<a href="<?php echo home_url('/service/reform/'); ?>" class="p-icon--arrow_r_03">リフォーム</a>
						<ul class="l-site_footer__nav__list__lv2">
							<li><a href="<?php echo home_url('/service/reform/3re/'); ?>">3RE</a></li>
							<li><a href="<?php echo home_url('/service/reform/case/'); ?>">リフォーム事例紹介</a></li>
						</ul>
					</li>
				</ul>
				<ul class="l-site_footer__nav__list__lv1">
					<li><a href="<?php echo home_url('/service/voice/'); ?>" class="p-icon--arrow_r_03">感動エピソード紹介</a></li>
					<li><a href="<?php echo home_url('/service/news/'); ?>" class="p-icon--arrow_r_03">ニュース＆トピックス</a></li>
					<li><a href="<?php echo home_url('/service/investors/'); ?>" class="p-icon--arrow_r_03">投資家の皆様へ</a></li>
					<li><a href="<?php echo home_url('/service/insurance/'); ?>" class="p-icon--arrow_r_03">保険について</a></li>
					<li><a href="<?php echo home_url('/service/promise/'); ?>" class="p-icon--arrow_r_03">お客様との約束</a></li>
					<li><a href="<?php echo home_url('/service/shopinfo/'); ?>" class="p-icon--arrow_r_03">店舗情報</a></li>
				</ul>
				<ul class="l-site_footer__nav__list__lv1">
					<li><a href="<?php echo home_url('/service/privilege/'); ?>" class="p-icon--arrow_r_03">お客様ご紹介カード</a></li>
					<li><a href="<?php echo home_url('/service/download/'); ?>" class="p-icon--arrow_r_03">各種書類ダウンロード</a></li>
					<li><a href="<?php echo home_url('/service/request/rental/'); ?>" class="p-icon--arrow_r_03">物件リクエスト</a></li>
					<li><a href="<?php echo home_url('/service/reservation/'); ?>" class="p-icon--arrow_r_03">来店予約</a></li>
					<li><a href="<?php echo home_url('/service/survey/rental-survey/'); ?>" class="p-icon--arrow_r_03">成約者様アンケート</a></li>
					<li><a href="<?php echo home_url('/service/contact/'); ?>" class="p-icon--arrow_r_03">お問い合わせ</a></li>
				</ul>
			</div>
		</div>
		<div class="l-site_footer__extra">
			<div class="l-site_footer__privacy"><a href="<?php echo home_url('/service/privacy/'); ?>">プライバシーポリシー</a></div>
			<div class="l-site_footer__copyright">CopyRight&copy;  [ 札幌宅商株式会社 ] All rights reserved</div>
		</div>
	</div>
</footer>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.jpostal.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jpostal.js"></script>
<?php if(is_page('service')): ?>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/top.js"></script>
<?php elseif(is_page('3re')): ?>
	<script>
		$(function(){
			$('.p-page_interior__slider').slick({
				centerMode: true,
				centerPadding: '16%',
				slidesToShow: 3,
				dots: true,
				arrows: false,
				autoplay: true,
				responsive: [{
					breakpoint: 768,
					settings: {
						slidesToShow: 1,
					}
				}]
			});
		});
	</script>
<?php endif; ?>




<?php if(is_page('karitai')): ?>
<script>
function search_chintai() {
	if ($('#search_kodawari').val() != '') {
		document.search_form.action = $('#search_kodawari').val();
	} else {
		document.search_form.action = 'https://www.sapporotakusho.co.jp/chintai/psearch-result-b/page-1.html';
	}
	document.search_form.submit();
}
</script>
<?php endif; ?>



<?php if(is_page('kaitai')): ?>
<script>
function search_baibai() {
	if ($('#search_kodawari').val() != '') {
		document.search_form.action = $('#search_kodawari').val();
	} else {
		document.search_form.action = 'https://www.sapporotakusho.co.jp/baibai/search-result/page-1.html';
	}
	document.search_form.submit();
}

$(function(){
	$('.baibai_type').change( function() {
		type = $(this).val();
		switch (type) {
			case '1001':
				$('.type_1001').show();
				$('.type_3000').hide();
				$('.type_5999').hide();
				$('.type_4999').hide();
				$('.type_2001').hide();
				$('.type_2000').hide();
				$('.madori_block').show();
			break;
			case '3000':
				$('.type_1001').hide();
				$('.type_3000').show();
				$('.type_5999').hide();
				$('.type_4999').hide();
				$('.type_2001').hide();
				$('.type_2000').hide();
				$('.madori_block').hide();
			break;
			case '5999':
				$('.type_1001').hide();
				$('.type_3000').hide();
				$('.type_5999').show();
				$('.type_4999').hide();
				$('.type_2001').hide();
				$('.type_2000').hide();
				$('.madori_block').hide();
			break;
			case '4999':
				$('.type_1001').hide();
				$('.type_3000').hide();
				$('.type_5999').hide();
				$('.type_4999').show();
				$('.type_2001').hide();
				$('.type_2000').hide();
				$('.madori_block').hide();
			break;
			case '2001':
				$('.type_1001').hide();
				$('.type_3000').hide();
				$('.type_5999').hide();
				$('.type_4999').hide();
				$('.type_2001').show();
				$('.type_2000').hide();
				$('.madori_block').show();
			break;
			case '2000':
				$('.type_1001').hide();
				$('.type_3000').hide();
				$('.type_5999').hide();
				$('.type_4999').hide();
				$('.type_2001').hide();
				$('.type_2000').show();
				$('.madori_block').show();
			break;
		}
		$('#search_madori').val('');
		$('#search_kodawari').val('');
	});
	$('input[name="type"]:eq(0)').prop('checked', true);
	$('input[name="type"]:eq(0)').trigger('change');
});
</script>
<?php endif; ?>








<?php wp_footer(); ?>

</body>
</html>
