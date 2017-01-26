<?php get_header(); ?>

<div class="row">
  <div class="small-3 column">
    <?php get_sidebar(); ?>
  </div>
  <div class="small-9 column">
    <div class="row text-center small-collapse">
      <?php
      $currentPage = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $args = array('posts_per_page' => 6, 'paged' => $currentPage);
      query_posts($args);
      if ( have_posts() ): $i = 0;
          while ( have_posts() ) : the_post(); ?>

          <?php if($i == 0): $column = 12; $class='';
                elseif($i > 0 && $i <= 2): $column = 6; $class=' second-row-padding';
                elseif($i > 2): $column = 4; $class=' third-row-padding';
                endif;
           ?>

          <div class="column small-<?php echo $column; echo $class; ?>">
            <?php if( has_post_thumbnail() ) :
              $urlImg = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
              endif; ?>
            <div class="blog-element" style="background: linear-gradient(rgba(0, 0, 0, 0.3),
      rgba(0, 0, 0, 0.7)), url(<?php echo $urlImg ?>);">
              <?php the_title( sprintf('<h3 class="entry-title"><a href="%s">',esc_url(get_permalink())  ),'</a></h3>' ); ?>
              <small><?php the_category(' '); ?></small>
            </div>
          </div>

          <?php $i++ ?>
        <?php endwhile; ?>
        <br>
        <hr>

        <div class="column small-12">
          <ul class="pagination text-center" role="navigation" aria-label="Pagination">
            <li class="pagination-previous"><?php next_posts_link('Older Posts'); ?></li>
            <li class="pagination-next"><?php previous_posts_link('Newer Posts'); ?></li>
          </ul>
        </div>

      <?php endif;
        wp_reset_query();
       ?>
    </div>
</div>
</div>

<?php get_footer(); ?>
