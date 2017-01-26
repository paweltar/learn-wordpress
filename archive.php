<?php get_header(); ?>

<div class="row">
  <div class="small-3 column">
    <?php get_sidebar(); ?>
  </div>
  <div class="small-9 column">
    <div class="row text-center small-collapse">
      <?php if ( have_posts() ): ?>
        <header class="page-header">
          <?php
            the_archive_title('<h1 class="page-title">', '</h1>');
            the_archive_description('<div class="taxonomy-description">','</div>');
           ?>
        </header>

          <?php while ( have_posts() ) : the_post(); ?>

          <?php get_template_part('content', 'archive') ?>

        <?php endwhile; ?>
        <br>
        <hr>

        <div class="column small-12">
          <?php the_posts_navigation(); ?>
        </div>

      <?php endif ?>
    </div>
</div>
</div>

<?php get_footer(); ?>
