<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width">
<meta name="format-detection" content="telephone=no">
<title><?php bloginfo('name'); ?></title>
<meta name="description" content="<?php bloginfo('description'); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
<?php wp_head(); ?>
</head>
<body>
<header class="l-header">
  <h1 class="l-header_logo"><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" width="242" height="242" alt="AmericanVillage"></a></h1>
  <span class="l-header_menu_trigger js-navbar_trigger"><span></span><span></span><span></span></span>
  <?php
  $defaults = array(
    'menu'            => '',
    'menu_class'      => 'l-header_menu',
    'container'       => 'nav',
    'container_class' => 'l-header_menu_wrap',
    'container_id'    => '',
    'fallback_cb'     => 'wp_page_menu',
    'before'          => '',
    'after'           => '',
    'link_before'     => '',
    'link_after'      => '',
    'echo'            => true,
    'depth'           => 0,
    'walker'          => '',
    'theme_location'  => '',
    'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
  );
  wp_nav_menu( $defaults );
  ?>
</header>