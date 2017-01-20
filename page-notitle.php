<?php

// Template Name: Page No Title

get_header(); ?>
<div class="row">
  <div class="small-3 column">
    <?php get_sidebar(); ?>
  </div>
  <div class="small-9 column">
<?php if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
      <h1>This is my static title</h1>
      <small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('G:i'); ?>, in <?php the_category(); ?></small>
      <p><?php the_content(); ?></p>
      <hr>
    <?php endwhile;
  endif;
?>
</div>
</div>

<?php get_footer(); ?>
