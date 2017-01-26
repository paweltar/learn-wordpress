<!DOCTYPE html>
<html <?php language_attributes() ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <title><?php bloginfo('name') ?> <?php wp_title('|'); ?></title>
    <meta name="descriptionm" content="<?php bloginfo('description') ?>">
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
            <?php wp_nav_menu(array(
              'container' => false,
              'menu_class' => 'dropdown menu',
              'theme_location' => 'primary',
              'items_wrap' => '<ul id="%1$s" class="%2$s" data-dropdown-menu>%3$s</ul>',
              'walker' => new Walker_Nav_Primary()
            )); ?>
          </div>
          </div>
        </div>
        <img class="header__image" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" alt="" />
          <div class="search-form-container">
            <hr>
            <?php get_search_form(); ?>
          </div>
        <hr>
      </div>
    </div>
