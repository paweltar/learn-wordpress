<div class="column small-<?php echo $column; ?>">
  <?php if( has_post_thumbnail() ) : ?>
  <?php the_post_thumbnail('full'); ?>
  <?php endif; ?>
  <?php the_title( sprintf('<h2 class="entry-title"><a href="%s">',esc_url(get_permalink())  ),'</a></h2>' ); ?>
  <small><?php the_category(' '); ?></small>
</div>
