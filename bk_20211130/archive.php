<?php
	$post = $wp_query->post;
	$cat=get_the_category();
	$cat=$cat[0];
	if(isset($_GET['cat_slug'])){
		$parent_slug = $_GET['cat_slug'];
	}elseif ($cat->category_parent) {
		$parent_cat = get_category($cat->category_parent);
		$parent_slug=$parent_cat->slug;
		$parent_name=$parent_cat->name;
	}elseif ($cat) {
		$parent_cat = get_category($cat);
		$parent_slug=$parent_cat->slug;
		$parent_name=$parent_cat->name;
	}
//	var_dump($_GET['cat_slug']);
//	var_dump($parent_slug);

	if ( $parent_slug == 'service' ) {
		include(TEMPLATEPATH.'/archive-service.php');
	} elseif ( $parent_slug == 'company' ) {
		include(TEMPLATEPATH.'/archive-report.php');
	}
?>