<div class="small-12 medium-4 column data-equalizer-watch">
  <div class="card featured-card animated fadeIn">
    <div class="card-divider">
      <p>
        <?php the_title(); ?>
      </p>
    </div>
    <?php the_post_thumbnail('full'); ?>
    <div class="card-section">
      <small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('G:i'); ?>, in <?php the_category(); ?></small>
      <p><?php the_excerpt(); ?></p>
    </div>
  </div>
</div>
