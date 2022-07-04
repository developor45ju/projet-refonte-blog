<form role="search" method="get" class="search-form" action="<?= esc_url(home_url('/')); ?>">
    <label>
        <span class="screen-reader-text"><?php _x('Search for:', 'mythme'); ?></span>
        <input type="search" class="search-field" placeholder="<?php esc_attr_x('Search &hellip;', 'placeholder', 'mytheme'); ?>" value="<?= get_search_query(); ?>" name="s" />
        <input type="image" src="<?= get_template_directory_uri() . '/images/loupe_de_recherche.svg'; ?>" alt="Loupe de recherche" class="search-submit" value="<?= esc_attr_x('Search', 'submit button', 'mytheme'); ?>" />
    </label>
</form>