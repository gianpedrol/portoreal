<?php
/*
* Template name: Fique por Dentro
*/
/*
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package PortoRealSA
 */

get_header();
?>

	<main id="pordentro" class="site-main">
		<section class="header-posts">
			<div class="container">
				<div class="row">
						<div class="col-md-6 d-flex align-items-center">
							<div class="box-texto-posts">
								<h2>FIQUE POR DENTRO</h2>
								<?php the_content(); ?>
							</div>
						</div>

						<div class="col-md-6 d-flex align-items-center">
							<div class="box-imagem-posts">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ilustra-midia.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>	
		</section>

		<section class="posts">
				<div class="container">
					<div class="row mt-5">
						<?php
							publicacoes();
						?>	
										
							</div><!-- Galeria empreedimentos -->
						</div><!-- Colunas -->
					</div><!-- Row empreedimentos -->
			
				</div><!--Container -->
			</section><!-- Seção Galeria -->
		

	</main><!-- #main -->

<?php
get_footer();
