<form role="search" action="<?php echo home_url('/'); ?>" method="get">
  <div class="input-group">
    <input class="input-group-field" type="search" value="<?php echo get_search_query() ?>" name="s" title="Search">
    <div class="input-group-button">
      <input type="submit" class="button" value="Search">
    </div>
  </div>
</form>
