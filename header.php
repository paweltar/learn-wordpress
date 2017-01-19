<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Awedsome Theme</title>
    <?php wp_head(); ?>
  </head>

  <?php if ( is_front_page() ):
      $awesome_classes = array('awesome-class', 'my-class');
    else :
      $awesome_classes = array('not-awesome-class', 'my-class');
    endif;
   ?>

  <body <?php body_class( $awesome_classes ); ?>>

    <?php wp_nav_menu(array('theme_location' => 'primary' )); ?>
    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
    <hr>
    <br>
