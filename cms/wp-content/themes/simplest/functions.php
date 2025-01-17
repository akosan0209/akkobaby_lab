<?php
  if ( !isset( $content_width ) ) $content_width = 768;
  if ( function_exists( 'add_theme_support' ) ) add_theme_support( 'automatic-feed-links' );
  if ( function_exists( 'register_nav_menu' ) ) register_nav_menu( 'menu', 'Menu' );
  if ( function_exists('register_sidebar') ) register_sidebar( array(
    'name' => __( 'Widgets', 'simplest' ),
    'id' => 'widgets',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div><!-- widget -->',
    'before_title' => '<h4>',
    'after_title' => '</h4>') );
?>
<?php 
// カスタムメニュー

register_nav_menus(array(
'menu-aboutme' =>  '右メニュー（当サイトについて）',
'menu-guidline' =>  '右メニュー（会社概要）',
'menu-info' =>  '右メニュー（お知らせ）',
'menu_contact' =>  '右メニュー（お問い合わせ）'
)); ?>