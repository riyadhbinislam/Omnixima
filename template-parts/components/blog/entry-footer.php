<?php
/**
 *  Blog Entry-Footer Template
 *
 * To be used inside of WordPress The Loop.
 *
 * @package omnixima
 */

$the_post_id = get_the_ID();
$article_terms = wp_get_post_terms( $the_post_id, ['category', 'post_tag'] );
if(empty($article_terms) || ! is_array( $article_terms )){
    return;
}

?>



<div class="entry-footer mt-4">

<?php
foreach( $article_terms as $key => $article_term) { ?>

<button class="btn border border-secondary mt-2 mr-2 ">
    <a class="text-secondary" href="<?php echo get_term_link( $article_term->slug, $article_term->taxonomy ); ?>">
        <?php echo $article_term->name; ?>
    </a>
</button>

<?php } ?>


</div>