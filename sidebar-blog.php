		<div class="child-side-bar static-side">
				<div class="side-bar-blo">
					<div class="blo">
						<h2 class="mont rel">CATEGORY</h2>
						<ul class="link-ul">
							<?php
							    $cats = wp_list_categories('echo=0&show_count=1&title_li=&taxonomy=blogcategory');
							    $cats = preg_replace('/ title=\"(.*?)\"/','', $cats);
							    $cats = preg_replace('/ class=\"(.*?)\"/','', $cats);
							    $cats = preg_replace('/<\/a> (\([0-9]*\))/', ' $1</a>', $cats);
							    echo $cats;
							?>
						</ul>
					</div><!-- /.blo -->
					<div class="blo">
						<h2 class="mont rel">ARCHIVE</h2>
						<ul class="link-ul">
							<?php wp_get_archives('type=monthly&post_type=blog&show_post_count=1'); ?>
						</ul>
					</div><!-- /.blo -->
				</div><!-- /.side-bar-blo -->
		</div><!-- /.child-side-bar -->