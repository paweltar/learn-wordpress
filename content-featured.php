<div class="small-12 medium-4 column data-equalizer-watch">
  <div class="card featured-card animated fadeIn">
    <div class="card-divider">
      <?php the_title( sprintf('<p class="entry-title"><a href="%s">',esc_url(get_permalink())  ),'</a></p>' ); ?>
    </div>
    <?php the_post_thumbnail('full'); ?>
    <div class="card-section">
      <small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('G:i'); ?></small>
      <h6 class="subheader"><?php the_category(' '); ?></h6>
      <p><?php the_excerpt(); ?></p>
    </div>
  </div>
</div>
