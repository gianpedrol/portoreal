<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package PortoRealSA
 */

get_header();
?>

	<main id="primary" class="site-main mt-5">

		<?php
		while ( have_posts() ) :
			the_post();
		?>	

			<section class="conteudo-post">
				<div class="container ">
					<div class="row d-flex justify-content-center">
						<div class=" post col-md-12 pt-5 pb-5 ">
							<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" srcset="<?php the_post_thumbnail_url(); ?>">

							<h2><?php the_title(); ?></h2>

							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</section>


		<?php
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
