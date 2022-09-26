<?php
	$parent_id = $post->ancestors[count($post->ancestors) - 1];

	$post_id=$post->post_parent;
	$pa_name = get_post($post_id);
	$pa = $pa_name->post_name;
	
	$parent_slug = get_post($parent_id)->post_name;
?>

<?php
	$template_slug = get_post($wp_query->post->ID)->post_name;
	if($parent_slug == 'service' && $pa == 'request'){
		$template_slug = "request";
	}elseif($parent_slug == 'service' && $pa == 'survey'){
		$template_slug = "survey";
//	}elseif($parent_slug == 'company' && $pa == 'recruit' || is_page('recruit') || $parent_slug == 'company'){
//		$template_slug = "soon";
	}
?>
<?php get_header($parent_slug); ?>
<?php get_template_part( $parent_slug.'/'.$template_slug ); ?>
<?php get_footer($parent_slug); ?>