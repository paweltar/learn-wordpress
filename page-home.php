<?php get_header(); ?>

<div class="row">
  <div class="small-3 column">
    <?php get_sidebar(); ?>
  </div>
  <div class="small-9 column">
    <?php if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>

          <?php get_template_part('content', get_post_format()); ?>

        <?php endwhile;
      endif;
      ?>
      <br>
      <hr>
      <p>
        <h5 class="text-center subheader">Recent Posts:</h5>
      </p>
      <hr>
      <br>
      <?php
      $args = array(
        'type' => 'post',
        'posts_per_page' => 2,
        'offset' => 1
      );
      $lastBlog = new WP_Query($args);

      if ( $lastBlog->have_posts() ) :
          while ( $lastBlog->have_posts() ) : $lastBlog->the_post(); ?>

            <?php get_template_part('content', get_post_format()); ?>

          <?php endwhile;
        endif;

      wp_reset_postdata();
      ?>
      <br>
      <hr>
      <p>
        <h5 class="text-center subheader">Category <b>Tutorials</b></h5>
      </p>
      <hr>
      <br>
      <?php
        $lastBlog = new WP_Query('type=post&posts_per_page=-1&cat=10');

        if ( $lastBlog->have_posts() ) :
            while ( $lastBlog->have_posts() ) : $lastBlog->the_post(); ?>

              <?php get_template_part('content', get_post_format()); ?>

            <?php endwhile;
          endif;

        wp_reset_postdata();
       ?>
  </div>
</div>

<?php get_footer(); ?>
