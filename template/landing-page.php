<?php
/*
* Template name:Landing Page
*/

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	
	<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">

	 <!-- Importação Google Fonts Urbanist -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<!-- Importação Google Fonts Urbanist -->
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
	</style>


	<!--Font Awesome 5.15 -->
	<script src="https://kit.fontawesome.com/b4e60eb143.js" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>


</head>
<!-- Fim Head --> 

	<main id="primary" class="site-main-landing">
        <section class="header-page">
            <div class="container d-flex justify-content-center ">
                <div class="chamada-principal">
                    <div class="logo-page text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="" srcset="" >
                    </div>
                    <div class="titulo-page text-center ">
                        <h3>GRUPO PORTO REAL</h3>

                        <h5>Foco nos mercados imobiliário, financeiro e agropecuário.</h5>

                        <h4>Conheça nossos empreendimentos</h4>

                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/seta-down.png" alt="" srcset="" width="50"></a>
                    </div>                
                </div>
            </div>
        </section>

        <section class="secao-destaque">
            <div class="container d-flex justify-content-center">
                <div class="container-destaque">
                    <span>Destaque</span>

                    <h2>ECOPARQUE<br>INDUSTRIAL</h2>

                    <p>O Ecoparque Sul-fluminense já é um polo e está em busca de expansão.</p>
                    <div class="botao-chamada">
                     <a href="">Conheça o <br> empreendimento</a>
                    </div>
                </div>
            </div>
        </section><!-- Seção destaque --> 

        <section class="secao-empreendimentos">
            <div class="container d-flex justify-content-center">
                <div class="container-empreendimentos">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="box-imagem-empreendimento">
                             <img src="<?php echo get_template_directory_uri(); ?>/assets/Banner/header-historia.png" alt="" srcset="" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-empreendimento">
                                <h3>Terra Nova Porto Real</h3>

                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata</p>

                                <a href="">ACESSE O SITE</a>
                            </div>
                        </div>
                    </div><!-- LINHA DE EMPREENDIMENTO + INFOS -->

                    <div class="row pt-5">
                        <div class="col-md-6">
                            <div class="box-imagem-empreendimento">
                             <img src="<?php echo get_template_directory_uri(); ?>/assets/Banner/header-historia.png" alt="" srcset="" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-empreendimento">
                                <h3>NOME EMPREENDIMENTO</h3>

                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata</p>

                                <a href="">NOVO SITE EM BREVE!</a>
                            </div>
                        </div>
                    </div><!-- LINHA DE EMPREENDIMENTO + INFOS -->

                </div>
            </div>
        </section>
	</main><!-- #main -->

<?php

get_footer();
			
