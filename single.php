<?php
/**
 *  Single Post Template
 *
 * @package omnixima
 */
get_header();
?>
 	<div id="primary">
		<main id="main" class="site-main mt-5" role="main">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-12">
						<?php
						if ( have_posts() ) :
							?>
							<div class="post-wrap">
								<?php
								if ( is_home() && ! is_front_page() ) {
									?>
									<header class="mb-5">
										<h1 class="page-title screen-reader-text">
											<?php single_post_title(); ?>
										</h1>
									</header>
									<?php
								}

								while ( have_posts() ) : the_post();

									get_template_part( 'template-parts/content' );

								endwhile;
								?>

								<?php

								else :

									get_template_part( 'template-parts/content-none' );

									?>

									</div>
								<?php
								endif;
								?>
							</div>
						 <!-- Next and previous link for page navigation. -->
						<div	div class="prev-link"><?php previous_post_link(); ?></div>
						<div class="next-link"><?php next_post_link(); ?></div>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-12">
						<?php dynamic_sidebar('sidebar-1'); ?>
					</div>
				</div>

			</div>
			<?php //comments_template(); ?>
		</main>
	</div>

<?php

get_footer();