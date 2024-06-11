<?php
//Theme Title
add_theme_support('title-tag');

//Thumbnail Image Support
add_theme_support( 'post-thumbnails', array('page', 'post'));
add_image_size( 'post-thumbnails', 800, 450, true);

//Exacert to 40 word
function omni_excerpt_more($more) {
    global $post;
    return '<br><br><a href="' . get_permalink($post->ID) . '">Read More</a>';
}
add_filter('excerpt_more', 'omni_excerpt_more');

function omni_excerpt_length($length) {
    return 15;
}
add_filter('excerpt_length', 'omni_excerpt_length', 999);


//PageNav Function
function omni_pagenav() {
    global $wp_query;

    $max = $wp_query->max_num_pages;
    if ($max <= 1) return; // Exit if there's only one page

    $current = get_query_var('paged') ? get_query_var('paged') : 1;

    $args = array(
        'base' => str_replace(999999999, '%#%', get_pagenum_link(999999999)),
        'total' => $max,
        'current' => $current,
        'prev_text' => 'Prev',
        'next_text' => 'Next',
    );

    echo '<div class="wp_pagenav">';
    echo '<p class="pages">Page ' . $current . ' <span>of</span> ' . $max . '</p>';
    echo paginate_links($args);
    echo '</div>';
}
