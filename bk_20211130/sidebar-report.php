		<div class="child-side-bar static-side">
				<div class="side-bar-blo">
					<div class="blo">
						<h2 class="mont rel">CATEGORY</h2>
						<ul class="link-ul">
							<?php
							    $cats = wp_list_categories('echo=0&show_count=1&title_li=&child_of=22');
							    $cats = preg_replace('/ title=\"(.*?)\"/','', $cats);
							    $cats = preg_replace('/ class=\"(.*?)\"/','', $cats);
							    $cats = preg_replace('/<\/a> (\([0-9]*\))/', ' $1</a>', $cats);
							    echo $cats;
							?>
						</ul>
					</div><!-- /.blo -->
					<div class="blo">
						<h2 class="mont rel">ARCHIVE</h2>
						<?php
							$cat_slug = 'company';
							$args = array(
								'category_name' => $cat_slug,
								'posts_per_page' => -1
							);
							$archive_query = new WP_Query( $args );
							while ( $archive_query->have_posts() ) {
								$archive_query->the_post();
								$archive_list[ get_the_time( 'Y/n', $post->ID ) ][] = $post->post_title;
							}
							wp_reset_postdata();
						?>
						<ul class="link-ul">
							<?php
								foreach( $archive_list as $year_month => $archive ):
								$year_month_arr = explode( '/', $year_month );
							?>
								<li><a href="<?php echo esc_url( home_url( $year_month.'/?cat_slug='.$cat_slug ) ) ?>"><?php echo $year_month_arr[0].'年'.$year_month_arr[1].'月' ?>（<?php echo count( $archive ) ?>）</a></li>
							<?php endforeach; ?>
						</ul>
					</div><!-- /.blo -->
				</div><!-- /.side-bar-blo -->
		</div><!-- /.child-side-bar -->