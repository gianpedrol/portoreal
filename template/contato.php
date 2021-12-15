<?php
/*
* Template name: Contato
*/

get_header();

?>

	<main id="primary" class="site-main">
		<section class="header-contato ">
			<div class="container">
				<div class="row">
					<div class="col-md-6 d-flex align-items-center">
						<div class="box-texto-contato">
							<h2>Contato</h2>
							<?php the_content(); ?>
						</div>
					</div>

					<div class="col-md-6 d-flex align-items-center">
						<div class="box-imagem-contato">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ilustra-contato.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</section><!-- Header contato --> 

		<section class="secao-formulario">
			<div class="container">
				<form action="">
					<input type="text" name="" id="" placeholder="Nome">
					<input type="email" name="" id="" placeholder="Email">
					<input type="textarea" name="" id="" placeholder="Digite aqui sua mensagem...">
					<input type="submit" name="" id="">
				</form>
			</div>
		</section>
	</main><!-- #main -->

<?php

get_footer();
			
