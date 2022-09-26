<?php
	$post = $wp_query->post;
	$cat=get_the_category();
	$cat=$cat[0];
//	var_dump($cat);
	if ($cat->category_parent) {
		$parent_cat = get_category($cat->category_parent);
		$parent_slug=$parent_cat->slug;
		$parent_name=$parent_cat->name;
	}elseif ($cat) {
		$parent_cat = get_category($cat);
		$parent_slug=$parent_cat->slug;
		$parent_name=$parent_cat->name;
	}
//	var_dump($parent_slug);

	if ( $parent_slug == 'service' ) {
		include(TEMPLATEPATH.'/single-service.php');
	} elseif ( $parent_slug == 'company' ) {
		include(TEMPLATEPATH.'/single-company.php');
	}
?>