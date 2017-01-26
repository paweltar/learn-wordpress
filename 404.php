<?php get_header(); ?>

<div class="row">
  <div class="column small-12">
    <div id="primary">
        <main id="main" class="site-main" role="main">
          <section class="error-404 not-found">
            <header class="page-header callout warning">
              <p class="page-title"><b>Sorry, page not found!</b></p>
              <p>It looks like nothing was found at this location. Maybe try one of the links below or a search?</p>
              <?php get_search_form(); ?>
            </header>

            <div class="page-content">

              <?php the_widget('WP_Widget_Recent_Posts'); ?>

              <div class="widget widget_categories">
                <h3>Check the most used categories:</h3>
                <ul>
                  <?php
                    wp_list_categories(array(
                      'orderby' => 'count',
                      'order' => 'DESC',
                      'show_count' => 1,
                      'title_li' => '',
                      'number' => 5,
                    ));
                   ?>
                </ul>
              </div>

              <?php the_widget('WP_Widget_Archives', 'dropdown=1'); ?>
            </div>

          </section>
        </main>
    </div>
  </div>
</div>

<?php get_footer(); ?>
