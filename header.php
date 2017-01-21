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
    <div class="row align-center">
      <div class="column">
        <div class="top-bar">
          <div class="top-bar-title">Awesome Theme</div>
          <div>
          <div class="top-bar-right">
            <?php wp_nav_menu(array('theme_location' => 'primary' )); ?>
          </div>
          </div>
        </div>
        <img class="header__image" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" alt="" />
        <hr>
      </div>
    </div>
    
