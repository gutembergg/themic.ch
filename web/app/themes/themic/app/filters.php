<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});

add_filter( 'image_size_names_choose', function ( $sizes ) {
    return array_merge( $sizes, array(
        'slider' => __( 'Slider Image' ),
    ) );
} );