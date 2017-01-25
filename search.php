<?php get_header(); ?>

<div class="row">
  <div class="small-3 column">
    <?php get_sidebar(); ?>
  </div>
  <div class="small-9 column">
    <?php if ( have_posts() ):
        while ( have_posts() ) : the_post(); ?>

          <?php get_template_part('content', 'search'); ?>

      <?php endwhile; ?>
    <?php endif; ?>
</div>
</div>

<?php get_footer(); ?>
