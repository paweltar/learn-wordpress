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
    <div class="row">
      <div class="column">
        <h4 class=" text-center subheader animated fadeIn">Most recent posts:</h4>
        <hr>
        <div class="row data-equalizer">
          <?php

            $args_cat = array(
              'include' => '8, 9, 10'
            );

            $categories = get_categories($args_cat);

            foreach($categories as $category) {
              $args = array(
                'type' =>'post',
                'posts_per_page' => 1,
                'category__in' => $category->term_id,
                'category__not_in' => array(1)
              );
              $lastBlog = new WP_Query($args);

              if ( $lastBlog->have_posts() ) :
                  while ( $lastBlog->have_posts() ) : $lastBlog->the_post(); ?>

                    <?php get_template_part('content', 'featured'); ?>

                  <?php endwhile;
                endif;

              wp_reset_postdata();
            }
           ?>
        </div>
         <hr>
      </div>
    </div>
