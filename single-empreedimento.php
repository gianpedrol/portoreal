<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package PortoRealSA
 */

$post_id = get_the_ID();
$fields = get_fields();
$galeria = $fields['galeria']; 
get_header();
?>
<style>
	footer{
		margin-top: 0;
	}
</style>
	<main id="primary" class="site-main">
		<div class="empreedimentos-single">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-lg-6 p-0 m-0 position-relative" >
						<?php the_title( '<h1 class="font-weight-bold position-absolute display-4 text-white w-100 p-5" style="z-index: 2; bottom: 0; left:0;">', '</h1>' ); 
						if(!empty($galeria) && is_array($galeria)){ ?>
							<div class="swiper mySwiperEmpreedimentos2" >
								<div class="swiper-wrapper">
									<?php 
										foreach($galeria as $item){
											echo '<div class="swiper-slide"><img class="img-responsive w-100" src="'.$item['sizes']['medium_large'].'" height="400" alt="'.$item['name'].'" /></div>';
										}
									?>
								</div>
							</div>
						<?php } else {
							the_post_thumbnail();
						} ?>
					</div>
					<div class="col-lg-6 px-0 mx-0">
						<div class="entry-header px-5 pt-lg-0 pt-4">
							<?php  
								echo '<h1 class=" font-weight-bold  mb-3">'.$fields['subtitulo'].'</h1>';
								echo '<p class="mb-5">'.$fields['descricao'].'</p>';
							?>
						</div>
						<?php if(!empty($galeria) && is_array($galeria)){ ?>
							<div thumbsSlider="" class="swiper mySwiperEmpreedimentos mt-lg-4 mt-0 py-0">
								<div class="swiper-wrapper">
								<?php 
									foreach($galeria as $item){
										echo '<div class="swiper-slide"><img class="img-responsive w-100" src="'.$item['sizes']['medium_large'].'" height="400" alt="'.$item['name'].'" /></div>';
									}
									?>
							</div>
						<?php } ?>
						</div><!-- .entry-header -->
					</div>
				</div>
			</div>
		</div>

	</main><!-- #main -->

<?php
get_footer();
