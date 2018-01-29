<?php

/**
 * register blocks widgets
 */
function td_load_widgets() {
    $td_block_widgets = array(
        'td_block_1',
        'td_block_2',
        'td_block_3',
        'td_block_4',
        'td_block_5',
        'td_block_6',
        'td_block_7',
        'td_block_8',
        'td_block_ad_box',
        'td_block_authors',
        'td_block_author',
        'td_block_popular_categories',
        'td_block_weather',
        'td_block_exchange',
        'td_block_instagram',
        'td_block_pinterest',
        'td_block_image_box',
    );

    foreach ( $td_block_widgets as $td_block_key ) {
        $td_block_widget = new td_block_widget( $td_block_key );
        register_widget( $td_block_widget );
    }
}

add_action('widgets_init', 'td_load_widgets');
