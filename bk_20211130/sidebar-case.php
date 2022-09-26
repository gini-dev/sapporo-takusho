						<div class="l-secondary_column">
							<div class="c-widget">
								<h3 class="c-widget__title"><span>CATEGORY</span></h3>
								<ul class="category_list">
									<?php
									    $cats = wp_list_categories('echo=0&show_count=1&title_li=&taxonomy=casecategory');
									    $cats = preg_replace('/ title=\"(.*?)\"/','', $cats);
									    $cats = preg_replace('/ class=\"(.*?)\"/','', $cats);
									    $cats = preg_replace('/<\/a> (\([0-9]*\))/', ' $1</a>', $cats);
									    echo $cats;
									?>
								</ul>
							</div>
							<div class="c-widget">
								<h3 class="c-widget__title"><span>ARCHIVE</span></h3>
								<ul class="archive_list">
									<?php wp_get_archives('type=monthly&post_type=case&show_post_count=1'); ?>
								</ul>
							</div>
						</div>
