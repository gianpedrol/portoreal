<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package PortoRealSA
 */


$checkfirst = false; 
$constructorPart1 = '<section class="produto-lista"><div class="container-lg"><div class="row"><div class="col-md-4 pt-5 py-lg-5">';
$constructorPart2 = '</div><div class="col-md-8 py-lg-5">';
$endconstructor = '</div></div></div></div>';
get_header();
?>

	<main id="produtos" class="site-main">
			<?php if ( have_posts() ) :?>
				<?php while ( have_posts() ) :
					if(!$checkfirst){
						the_post();					
						get_template_part( 'template-parts/banner-produto');
						$checkfirst = true;
						echo $constructorPart1;
						get_sidebar();
						echo $constructorPart2;
					} else {
						the_post();					
						get_template_part( 'template-parts/content-produto');
					}
					
					
				endwhile;
				echo $endconstructor;

				the_posts_navigation();

			endif;
			?>
	</main><!-- #main -->

<?php
get_footer();
