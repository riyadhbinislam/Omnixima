<?php get_header();?>

<div id="primary">
    <main id="main" class="site-main" role="main">
        <?php
        if ( have_posts() ) :
            ?>
            <div class="container">
                <?php
                if ( is_home() && ! is_front_page() ) {
                    ?>
                    <header class="mb-5">
                        <h1 class="page-title ">
                            <?php single_post_title(); ?>
                        </h1>
                    </header>
                    <?php
                }
                ?>

                <?php
                $index         = 0;
                $no_of_columns = 3;
                ?>

                <div class="row">
                    <?php
                    while ( have_posts() ) : the_post();

                        if ( $index !== 0 && $index % $no_of_columns === 0 ) {
                            ?>
                            </div><div class="row mb-3" >
                            <?php
                        }
                        ?>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <?php
                            get_template_part( 'template-parts/content' );
                            ?>
                        </div>
                        <?php

                        $index++;

                    endwhile;
                    ?>
                </div>

                <?php

                else :

                    get_template_part( 'template-parts/content-none' );

                endif;

                omnixima_pagination();
                ?>
            </div>
    </main>
</div>

<?php get_footer();?>
