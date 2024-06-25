<?php
/**
 *  Blog Entry-Header Template
 *
 * @package omnixima
 */

$the_post_id = get_the_ID();
$hide_title = get_post_meta( $the_post_id, '_hide_page_title', true );
$heading_class = ! empty ( $hide_title) && 'yes' === $hide_title ? 'hide' : '';
$has_post_thumbnail = get_the_post_thumbnail( $the_post_id );
?>

<header class="entry-header">
<?php
    // Featured Image
    if ( $has_post_thumbnail) { ?>
        <div class="entry-thumbnail">
            <a href="<?php echo esc_url( get_permalink() )?>">
                <?php
                    the_post_custom_thumbnail(
                        $the_post_id,
                        'featured-thumbnail',
                        [
                            'sizes' => '(max-width: 375px) 375px, 250px',
                            'class' => 'attachment-featured-thumbnail size-featured-large'
                        ]

                    );
                ?>
            </a>
        </div>
    <?php }
    //Title
    if( is_single() || is_page()){
        printf('<h1 class="page-title text-dark %1$s">%2$s</h1>',esc_attr( $heading_class ),wp_kses_post( get_the_title()));
    }else {
        printf('<h2 class="entry-title text-dark"><a href="%1$s">%2$s</a></h2>',esc_url( get_permalink() ),wp_kses_post( get_the_title() ));
    }
?>
</header>