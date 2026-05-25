<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <input type="search" class="form-input" placeholder="<?php esc_attr_e( 'Search...', 'lingo-house' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
  <button type="submit"><?php esc_html_e( 'Search', 'lingo-house' ); ?></button>
</form>
