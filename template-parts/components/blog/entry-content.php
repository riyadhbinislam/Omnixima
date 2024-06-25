<?php
/**
 *  Blog Entry-Content Template
 *
 * @package omnixima
 */
?>

<div class="entry-content">
<?php
if (is_single()){
    the_content(
        sprintf(
            wp_kses(
                __('continue reading %s <span class="meta-nav">&rarr;</span>', 'omnixima'),
                    ['span' => ['class' => [],]]
            ),
            the_title( '<span class="screen-reader-text">"', '"</span>', false )
        )
    );
    wp_link_pages(
        [
            'before' => '<div class="page-links">'.'<br>'. esc_html__( 'Pages:', 'omnixima' ),
            'after'  => '</div>',
        ]
        );
}else{
    omnixima_the_excerpt(20);
    echo omnixima_the_excerpt_more();
}
?>
</div>