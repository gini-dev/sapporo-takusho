<?php get_header('company'); ?>
<?php
	$department = $_GET['department'];
	$birthplace = $_GET['birthplace'];
	$affiliation = $_GET['affiliation'];
?>
<div class="txt-mv rel">
	<h1 class="page-title mont">Staff</h1>
	<div class="page-title-ja">スタッフ紹介</div>
</div><!-- /.txt-mv -->

<div class="main-contents staff-archive">
	<section class="staff-list-area">
		<div class="inner">
			<div class="rel main-box">
				<div class="search-area flex flexcenter">
					<h3 class="mont">SEARCH</h3>
					<form action="<?php echo home_url('/company/staff/'); ?>" method="get">
						<div class="flex flexcenter search-flex">
							<div class="c-select">
								<select name="department">
									<option value="">部門を選択</option>
<?php
	$my_tax = 'departmentcategory';
	$parent_terms = get_terms( $my_tax, array('hide_empty' => false, 'parent' => 0) );
	if ( !empty( $parent_terms ) ) :
		foreach ( $parent_terms as $pt ) : 
		$pt_id = $pt->term_id;
		$pt_name = $pt->name;
		$pt_slug = $pt->slug;
		$pt_url = get_term_link($pt);
?>
									<option value="<?php print $pt_slug; ?>" <?php if($department == $pt_slug){print 'selected';} ?>><?php echo $pt_name; ?></option>
<?php 
	$child_terms = get_terms( $my_tax, array('hide_empty' => false, 'parent' => $pt_id) );
	if ( !empty( $child_terms ) ) :
		foreach ( $child_terms as $ct ) : 
			$ct_id = $ct->term_id;
			$ct_name = $ct->name;
			$ct_slug = $ct->slug;
			$ct_url = get_term_link($ct);
?>
									<option value="<?php print $ct_slug; ?>" <?php if($department == $ct_slug){print 'selected';} ?>>　<?php echo $ct_name; ?></option>
<?php
	endforeach;
	endif;
?>
<?php
	endforeach;
	endif;
?>
								</select>
							</div>
							<div class="c-select">
								<select name="birthplace">
									<option value="">出身地を選択</option>
<?php
	$my_tax = 'place';
	$parent_terms = get_terms( $my_tax, array('hide_empty' => false, 'parent' => 0) );
	if ( !empty( $parent_terms ) ) :
		foreach ( $parent_terms as $pt ) : 
		$pt_id = $pt->term_id;
		$pt_name = $pt->name;
		$pt_slug = $pt->slug;
		$pt_url = get_term_link($pt);
?>
									<option value="<?php echo $pt_slug; ?>" <?php if($birthplace == $pt_slug){print 'selected';} ?>><?php echo $pt_name; ?></option>
<?php 
	$child_terms = get_terms( $my_tax, array('hide_empty' => false, 'parent' => $pt_id) );
	if ( !empty( $child_terms ) ) :
		foreach ( $child_terms as $ct ) : 
			$ct_id = $ct->term_id;
			$ct_name = $ct->name;
			$ct_slug = $ct->slug;
			$ct_url = get_term_link($ct);
?>
									<option value="<?php print $ct_slug; ?>" <?php if($birthplace == $ct_slug){print 'selected';} ?>>　<?php echo $ct_name; ?></option>
<?php
	endforeach;
	endif;
?>
<?php
	endforeach;
	endif;
?>
								</select>
							</div>
							<div class="c-select">
								<select name="affiliation">
									<option value="">所属同好会を選択</option>
<?php
	$my_tax = 'club';
	$parent_terms = get_terms( $my_tax, array('hide_empty' => false, 'parent' => 0) );
	if ( !empty( $parent_terms ) ) :
		foreach ( $parent_terms as $pt ) : 
		$pt_id = $pt->term_id;
		$pt_name = $pt->name;
		$pt_slug = $pt->slug;
		$pt_url = get_term_link($pt);
?>
									<option value="<?php echo $pt_slug; ?>" <?php if($affiliation == $pt_slug){print 'selected';} ?>><?php echo $pt_name; ?></option>
<?php 
	$child_terms = get_terms( $my_tax, array('hide_empty' => false, 'parent' => $pt_id) );
	if ( !empty( $child_terms ) ) :
		foreach ( $child_terms as $ct ) : 
			$ct_id = $ct->term_id;
			$ct_name = $ct->name;
			$ct_slug = $ct->slug;
			$ct_url = get_term_link($ct);
?>
									<option value="<?php print $ct_slug; ?>" <?php if($affiliation == $ct_slug){print 'selected';} ?>>　<?php echo $ct_name; ?></option>
<?php
	endforeach;
	endif;
?>
<?php
	endforeach;
	endif;
?>
								</select>
							</div>
							<input type="submit" value="スタッフを絞り込む">
						</div><!-- /.search-flex -->
					</form>
				</div><!-- /.search-area -->
<?php
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	
//	$birth = "array('taxonomy' => 'place','field' => 'slug','terms' => ".$birthplace.",),";
//	var_dump($birth);
//	var_dump($department);
	if($department){
		$contarr[] = $department;
		$contarrname[] = "departmentcategory";
		$contarrname[] = $department;
	}
	if($birthplace){
		$contarr[] = $birthplace;
		$contarrname[] = "place";
		$contarrname[] = $birthplace;
	}
	if($affiliation){
		$contarr[] = $affiliation;
		$contarrname[] = "club";
		$contarrname[] = $affiliation;
	}
	$cnt = count($contarr);
//	var_dump($contarrname);
//	print $cnt;
	
	if($cnt >= 1){
		if($cnt == 3){
			$args = array(
				'post_type' => 'staff',
				'post_status' => 'publish',
				'posts_per_page' => 12,
				'tax_query' => array(
					'relation' => 'AND',
					array(
						'taxonomy' => 'departmentcategory',
						'field' => 'slug',
						'terms' => $department,
					),
					array(
						'taxonomy' => 'place',
						'field' => 'slug',
						'terms' => $birthplace,
					),
					array(
						'taxonomy' => 'club',
						'field' => 'slug',
						'terms' => $affiliation,
					),
				),
				'paged' => $paged
			);
		}elseif($cnt == 2){
			$args = array(
				'post_type' => 'staff',
				'post_status' => 'publish',
				'posts_per_page' => 12,
				'tax_query' => array(
					'relation' => 'AND',
					array(
						'taxonomy' => $contarrname[0],
						'field' => 'slug',
						'terms' => $contarrname[1],
					),
					array(
						'taxonomy' => $contarrname[2],
						'field' => 'slug',
						'terms' => $contarrname[3],
					),
				),
				'paged' => $paged
			);
		}else{
			$args = array(
				'post_type' => 'staff',
				'post_status' => 'publish',
				'posts_per_page' => 12,
				'tax_query' => array(
					array(
						'taxonomy' => $contarrname[0],
						'field' => 'slug',
						'terms' => $contarrname[1],
					),
				),
				'paged' => $paged
			);
		}
	}else{
		$args = array(
			'post_type' => 'staff',
			'post_status' => 'publish',
			'posts_per_page' => 12,
			'paged' => $paged
		);
	}
//	var_dump($args);
	$wp_query->query($args);
?>
				<ul class="staff-archive-list flex jc-start">
<?php
	if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();
	$ID = $post->post_author;
	$placeterms = "";
	$placetermid = "";
	$placetermname = "";
	$placetermslug = "";
	$placeterms = get_the_terms($post->ID, 'place');
	if ($placeterms != null) {
		foreach( $placeterms as $placeterm ) {
			$placetermid = $placeterm->term_id;
			$placetermname = $placeterm->name;
			$placetermslug = $placeterm->slug;
		}
	}
//	var_dump($placetermname);
	$clubterms = "";
	$clubtermid = "";
	$clubtermname = "";
	$clubtermslug = "";
	$clubterms = get_the_terms($post->ID, 'club');
	if ($clubterms != null) {
		foreach( $clubterms as $clubterm ) {
			$clubtermid = $clubterm->term_id;
			$clubtermname = $clubterm->name;
			$clubtermslug = $clubterm->slug;
		}
	}
	$image1 = get_field('img1');
	$image2 = get_field('img2');
	$size = 'full';
?>
					<li><a href="<?php print get_permalink( ); ?>">
						<div class="img">
							<?php print wp_get_attachment_image($image1,$size,false,array('class'=>'main-img')); ?>
							<?php print wp_get_attachment_image($image2,$size,false,array('class'=>'hover-img')); ?>
						</div>
						<div class="txt">
							<h4 class="rel">
								<span class="trance"><?php
									if(mb_strlen($post->post_title, 'UTF-8')>25){
										$title= mb_substr($post->post_title, 0, 25, 'UTF-8');
										echo $title.'…';
									}else{
										echo $post->post_title;
									}
								?></span>
								<p><?php print get_field('kana'); ?></p>
							</h4>
							<div class="sub">
								<?php print get_field('hire_date'); ?>年入社<?php if($placetermname){ print "/";} ?><?php echo $placetermname; ?><?php if($clubterms[0]->name){ print "/";} ?><?php echo esc_html($clubterms[0]->name); ?>
							</div>
						</div>
					</a></li>
<?php endwhile; ?>
				</ul>
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
			</div><!-- /.main-box -->
		</div><!-- /.inner -->
	</section><!-- /.staff-list-area -->
</div><!-- /.main-contents -->
<?php get_footer('company'); ?>