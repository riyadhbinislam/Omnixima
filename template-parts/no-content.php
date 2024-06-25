<?php
/**
 *  No Blog Content Template
 *
 * @package omnixima
 */
?>


<section class="no-result not-found">
    <header>
        <h1 class="page-title">
            <?php esc_html_e( 'Nothing Found', 'omnixima' ); ?>
        </h1>
    </header>
    <div class="page-content">
        <?php if ( is_home() && current_user_can( 'publish_posts' ) ) { ?>
            <p>
                <?php
                printf( wp_kses( __( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'omnixima' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) );
                ?>
            </p>
        <?php } elseif ( is_search() ) { ?>
                <p>
                    <?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'omnixima' ); ?>
                </p>
        <?php get_search_form(); ?>
        <?php } else { ?>
                <p style="color: dimgrey;">
                    <?php esc_html_e( 'It seems we cannot find what you are looking for. Perhaps searching can help.', 'omnixima' ); ?>
                </p>
        <?php get_search_form(); ?>
        <?php } ?>
    </div>
</section>