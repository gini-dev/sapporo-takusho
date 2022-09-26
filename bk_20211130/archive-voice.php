<?php get_header('service'); ?>
	<main role="main">
		<!-- l-page_content -->
		<section class="l-page_content">

			<div class="l-page_head">
				<div class="l-page_head__inner">
					<h2 class="p-heading_lv1">感動エピソード紹介</h2>
				</div>
				<div class="topic_path">
					<ul>
						<li><a href="<?php echo home_url('/service/news/'); ?>">TOP</a></li>
						<li>感動エピソード紹介</li>
					</ul>
				</div>
			</div>
<?php
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$args = array(
		'post_type' => 'voice',
		'post_status' => 'publish',
		'orderby' => 'post_date',
		'order' => 'DESC',
		'posts_per_page' => 12,
		'paged' => $paged
	);
	$wp_query->query($args);
?>

			<section class="l-page_section">
				<div class="l-page_section__inner">
					<section class="p-page_voice">
						<div class="p-page_voice__head">
							<ul class="navi">
								<li class="navi__item all current"><a href="<?php echo home_url('/service/voice/'); ?>">すべて</a></li>
								<li class="navi__item karitai"><a href="<?php echo home_url('/service/voicecategory/karitai/'); ?>">賃貸</a></li>
								<li class="navi__item kashitai"><a href="<?php echo home_url('/service/voicecategory/kashitai/'); ?>">賃貸管理</a></li>
								<li class="navi__item kaitai"><a href="<?php echo home_url('/service/voicecategory/kaitai/'); ?>">売買</a></li>
								<li class="navi__item uritai"><a href="<?php echo home_url('/service/voicecategory/uritai/'); ?>">不動産売却</a></li>
								<li class="navi__item reform"><a href="<?php echo home_url('/service/voicecategory/reform/'); ?>">リフォーム</a></li>
							</ul>
						</div>
						<div class="p-page_voice__body js-animateblock">
							<div class="p-page_voice__list">
<?php
	if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();
	$terms = get_the_terms($post->ID, 'voicecategory');
?>
								<article class="p-module_voice__item c-voice <?php echo esc_html($terms[0]->slug); ?> js-animateblock--scale">
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
								</article>
<?php endwhile; ?>
							</div>
						</div>
<?php
	if(function_exists('wp_pagenavi')):
?>
						<div class="p-pagination">
							<?php wp_pagenavi(); ?>
						</div>
<?php
	endif;endif;
	wp_reset_query();
?>
					</section>
				</div>
			</section>

		</section>
		<!-- //l-page_content -->
	</main>

<?php get_footer('service'); ?>