<?php
//アップデート通知の非表示
add_filter('pre_site_transient_update_core', create_function('$a', "return null;"));

//アイキャッチ画像の有効
add_theme_support('post-thumbnails');
function baw_theme_setup() {
	add_image_size('property_thumb', 520, 276 ,true );
}

//サイドバー表示
register_sidebar();

//カスタムクエリー　ニュースページャー
function custom_query( $query ) {
	if ( is_admin() || ! $query->is_main_query() )
		return;

	if ( $query->is_post_type_archive( 'post' ) ) {
		$query->set( 'posts_per_page', '10' );
		return;
	}
}
add_action( 'pre_get_posts', 'custom_query' );

//抜粋の文末変更ﾊﾟﾀｰﾝ1
function new_excerpt_more($more) {
	return '･･･';
}
add_filter('excerpt_more', 'new_excerpt_more');

//ﾓﾊﾞｲﾙとPCでWP Multibyte Patchの文字数を個別に指定
function new_excerpt_mblength($length) {
	return ( wp_is_mobile() ) ? 50 : 85;
}
add_filter('excerpt_mblength', 'new_excerpt_mblength');

add_action('init', function() {
remove_filter('the_excerpt', 'wpautop');
remove_filter('the_content', 'wpautop');
});
add_filter('tiny_mce_before_init', function($init) {
$init['wpautop'] = false;
$init['apply_source_formatting'] = true;
return $init;
});

if ( ! function_exists('tinymce_init') ) {
    function tinymce_init( $init ) {
        $init['verify_html'] = false; // 空タグや属性なしのタグを消させない
        $initArray['valid_children'] = '+body[style], +div[div|span|a], +span[span]'; // 指定の子要素を消させない
        return $init;
    }
    add_filter( 'tiny_mce_before_init', 'tinymce_init', 100 );
}

add_shortcode( 'tp', 'shortcode_tp' );
function shortcode_tp( $atts, $content = '' ) {
	return get_template_directory_uri().$content;
}

function twpp_get_adjacent_post_url( $previous = true ) {
	$post = get_adjacent_post( false, '', $previous );
	$url  = '';
	if( !empty( $post ) ) {
		$url = get_permalink( $post->ID );
	}
	return $url;
}

function twpp_get_adjacent_post_url2( $previous = true ) {
	$post = get_adjacent_post( true, '', $previous );
	$url  = '';
	if( !empty( $post ) ) {
		$url = get_permalink( $post->ID );
	}
	return $url;
}

add_filter( 'get_archives_link', 'my_archives_link' );
function my_archives_link( $output ) {
	$output = preg_replace('/<\/a>\s*(&nbsp;)\((\d+)\)/','（$2）</a>',$output);
	return $output;
}

// ユーザープロフィールの項目のカスタマイズ
function my_user_meta($wb){
	$wb['note'] = 'プロフィール';
	$wb['department'] = '所属部署';
	$wb['position'] = '役職';

	return $wb;
}
add_filter('user_contactmethods', 'my_user_meta', 10, 1);

function is_parent_slug() {
    global $post;
    if ($post->post_parent) {
        $post_data = get_post($post->post_parent);
        return $post_data->post_name;
    }
}

function custom_wp_pagenavi( $html ) {
  $out = '';
  $out = str_replace( "<div", "", $html );
  $out = str_replace( "class='wp-pagenavi' role='navigation'>", "", $out );
  $out = str_replace( "<a", "<li class='p-pagination__item'><a", $out );
  $out = str_replace( "</a>", "</a></li>", $out );
  $out = str_replace( "<span class='pages'", "<li class='pages' style='display:none;'><a", $out );
  $out = str_replace( "<span aria-current='page' class='current'", "<li class='p-pagination__item current'><a", $out );
  $out = str_replace( "</span>", "</a></li>", $out );
  $out = str_replace( "</div>", "", $out );

  return '<ul class="p-pagination__list">' . $out . '</ul>';
}
add_filter( 'wp_pagenavi', 'custom_wp_pagenavi' );

//MW WP FORM 送信日時
function send_date_time( $value, $key, $insert_contact_data_id ) {
    if ( $key === 'send_datetime' ) {
        return date_i18n( 'Y年m月d日 H時i分' );
    }
    return $value;
}
add_filter( 'mwform_custom_mail_tag_mw-wp-form-55', 'send_date_time', 10, 3 );
add_filter( 'mwform_custom_mail_tag_mw-wp-form-50', 'send_date_time', 10, 3 );
add_filter( 'mwform_custom_mail_tag_mw-wp-form-98', 'send_date_time', 10, 3 );
add_filter( 'mwform_custom_mail_tag_mw-wp-form-120', 'send_date_time', 10, 3 );
add_filter( 'mwform_custom_mail_tag_mw-wp-form-132', 'send_date_time', 10, 3 );
add_filter( 'mwform_custom_mail_tag_mw-wp-form-333', 'send_date_time', 10, 3 );
add_filter( 'mwform_custom_mail_tag_mw-wp-form-337', 'send_date_time', 10, 3 );
add_filter( 'mwform_custom_mail_tag_mw-wp-form-339', 'send_date_time', 10, 3 );
add_filter( 'mwform_custom_mail_tag_mw-wp-form-343', 'send_date_time', 10, 3 );
add_filter( 'mwform_custom_mail_tag_mw-wp-form-374', 'send_date_time', 10, 3 );
add_filter( 'mwform_custom_mail_tag_mw-wp-form-449', 'send_date_time', 10, 3 );
add_filter( 'mwform_custom_mail_tag_mw-wp-form-525', 'send_date_time', 10, 3 );

