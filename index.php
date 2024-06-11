<?php get_header();?>

<section>
    <div class="container">
        <h2>Get The Content</h2>
        <div class="row">
            <div class="col-md-12 post_col">
                <?php
                    if (have_posts()):
                        while(have_posts()) : the_post();
                ?>
                    <div class="blog_area">
                        <div class="post_thumb">
                            <a href="<?php the_permalink();?>"><?php echo the_post_thumbnail('post-thumbnails');?></a>
                        </div>
                        <div class="post_details">
                            <h2><a href="<?php the_permalink();?>"><?php the_title() ;?></a></h2>
                            <?php echo get_the_excerpt();?>
                        </div>
                    </div>
                <?php
                    endwhile;
                    else:
                        _e('No Post Found');
                    endif;
                ?>
            </div>
            <div id="col-md-12 page_nav">
                <?php if (function_exists('omni_pagenav')) {
                    omni_pagenav();
                } else { ?>
                    <?php next_posts_link('Next'); ?>
                    <?php previous_posts_link('Previous'); ?>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>
