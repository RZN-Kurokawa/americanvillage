<?php

/**
 * アイキャッチ画像を表示する
 */
function my_after_setup_theme(){
 // アイキャッチ画像を有効にする
 add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'my_after_setup_theme' );


/**
 * 画像メディアに余計な属性を付与させない
 */
add_filter( 'image_send_to_editor', 'remove_image_attribute', 10 );
add_filter( 'post_thumbnail_html', 'remove_image_attribute', 10 );
function remove_image_attribute( $html ){
  $html = preg_replace( '/class=[\'"]([^\'"]+)[\'"]/i', '', $html );
  $html = preg_replace( '/title=[\'"]([^\'"]+)[\'"]/i', '', $html );
  return $html;
}


/**
 * 外観 ＞ メニュー の表示
 */
add_theme_support('menus');


/**
 * カスタムメニューに不要なID,Classを付与しない
 */
// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);
