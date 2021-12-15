<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PortoRealSA
 */
	$menu = wp_get_nav_menu_items('Menu 1');
?>

	<footer id="colophon">
		<div class="container-fluid site-footer bgblue">
			<div class="container">
				<div class="row">
					<div class="col-md-3 justify-content-center text-center">
						<img height="auto" width="220px" src="<?= bloginfo('url') ?>/wp-content/uploads/2021/12/logo-footer.png">
						<p class="text-center mt-3"><a href="#">Conheça nossos outros empreendimentos</a></p>
					</div>

					<div class="col-md-2 d-flex justify-content-center align-items-center">
						<div class="d-block">
						<a class="nav-link" href="<?= $menu[0]->url ?>"><?= $menu[0]->title ?></a>
						<a class="nav-link" href="<?= $menu[1]->url ?>"><?= $menu[1]->title ?></a>
						</div>

					</div>
					<div class="col-md-2 d-flex justify-content-center align-items-center">
						<div class="d-block">
							<a class="nav-link" href="<?= $menu[2]->url ?>"><?= $menu[2]->title ?></a>
							<a class="nav-link" href="<?= $menu[3]->url ?>"><?= $menu[3]->title ?></a>
						</div>
					</div>
					<div class="col-md-3 d-flex justify-content-center align-items-center p-5">
						<div class="d-inline social-media">
							<a href="#">
								<img id="icon-facebook" class="footer-icone" src="<?php echo get_template_directory_uri(); ?>/assets/svg/footer/icon-facebook.svg" alt="facebook">
							</a>
							<a href="#">
								<img id="icon-insta" class="footer-icone" src="<?php echo get_template_directory_uri(); ?>/assets/svg/footer/icon-insta.svg" alt="instagram">
							</a>
							<a href="#">
								<img id="icon-whatsapp" class="footer-icone" src="<?php echo get_template_directory_uri(); ?>/assets/svg/footer/icon-whatsapp.svg" alt="whatsapp">
							</a>
						</div>
					</div>

					<div class="col-md-2 d-flex justify-content-center align-items-center">
						<a href="#corpo-ancora">
							<svg width="100" height="100" viewBox="0 0 100 100" id="seta-up" class="footer-icone">       
								<image xlink:href="<?php echo get_template_directory_uri(); ?>/assets/svg/footer/seta-up.svg" src="<?php echo get_template_directory_uri(); ?>/assets/svg/footer/seta-up.png" width="90" height="90"/>    
							</svg>
						</a>
					</div>
				</div>
				<div class="row d-flex justify-content-end">
					<a>
						<img width="150"src="<?php echo get_template_directory_uri(); ?>/assets/images/sorocaba-branco.png" alt="">
					</a>
				</div>
			</div>
		</div>
	</footer>

<!-- <p class="my-0 py-3 py-md-0">Copyright © 2021 Porto Real S.A. <a href="#" class="text-white">Política de Privacidade</a> e <a href="#" class="text-white">Termos e Condições de Uso.</a></p> -->

</div><!-- #page -->

<?php wp_footer(); ?>


 	<!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>



	<!-- Scripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<!-- OWL CAROUSEL -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
		
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>
	
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>


</body>
</html>
