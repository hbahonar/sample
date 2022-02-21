<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
<div class="search-box-form">
    <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url("/")); ?>">
        <input type="search" placeholder="<?php esc_attr_e('Search', 'sample') ?>" class="search-field" value="<?php echo esc_attr(get_search_query()); ?>" name="s" />
        <button type="submit" tabindex="0" class="search-submit"><span class="dashicons dashicons-search"></span></button>
    </form>
</div>