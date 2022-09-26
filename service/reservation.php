	<main role="main">
		<!-- l-page_content -->
		<section class="l-page_content">

			<div class="l-page_head">
				<div class="l-page_head__inner">
					<h2 class="p-heading_lv1">来店予約</h2>
				</div>
				<div class="topic_path">
					<ul>
						<li><a href="/">TOP</a></li>
						<li>来店予約</li>
					</ul>
				</div>
			</div>

			<section class="l-page_section">
				<div class="l-page_section__inner wide">
					<div class="p-page_reservation">
						<?php if(have_posts()):while(have_posts()):the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile;endif; ?>
					</div>
				</div>
			</section>

		</section>
		<!-- //l-page_content -->
	</main>
