<?php get_header(); ?>
<div class="row">
  <div class="small-3 column">
    <?php get_sidebar(); ?>
  </div>
  <div class="small-9 column">

<?php if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
      <h1>This is static "about me" template</h1>
      <p><?php the_content(); ?></p>
      <h3><?php the_title(); ?></h3>

      <hr>

    <?php endwhile;
  endif;
?>
</div>
</div>

<?php get_footer(); ?>
