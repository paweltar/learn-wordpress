<div class="card" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="card-divider">
    <?php the_title('<h4 class="entry-title">','</h4>'); ?>
  </div>
  <?php if ( has_post_thumbnail() ): ?>
    <div class="full"><?php the_post_thumbnail('search-thumb'); ?></div>
  <?php endif; ?>
  <div class="card-section">
    <p><?php the_excerpt(); ?></p>
    <hr>
    <small><?php the_category(' '); ?> || <?php the_tags(); ?> ||  <?php edit_post_link(); ?></small>

  </div>
</div>
