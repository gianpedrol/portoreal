<?php
/*
* Template name: home 2
*/

get_header();
$fields = get_fields();
?>

	<main id="primary" class="site-main-home">
    
	<section class="sessao1">
		<div class="position-fixed sessao-fixed d-flex justify-content-center ">
		<div class="container">
				<div class="row col-12">
				
					<div class="col-lg-6">					
						<h1 data-aos="fade-down" data-aos-duration="3000"><?php echo $fields['Sessao1_Titulo']; ?></h1>
						<h5><?php echo $fields['Sessao1_SubTitulo']; ?></h5>
						<div class="row">
							<div class="col-12 mt-2 mb-2">
								<a href="#sessao3-linha1"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/seta-down.png" alt="" srcset="" width="50"></a>
							</div>
						</div>
					</div>

					<div class="col-6" data-aos="fade-up" data-aos-duration="3000">
						<div id="carouselSessao1" class="carousel slide carousel-fade" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#carouselSessao1" data-slide-to="0" class="active"></li>
								<li data-target="#carouselSessao1" data-slide-to="1"></li>
								
							</ol>
							<div class="carousel-inner" role="listbox">
								<div class="carousel-item active img-slide">
									<img src="<?= bloginfo('url') ?>/wp-content/uploads/2021/12/ilustra-header@2x.png" alt="First slide">
								</div>
								<div class="carousel-item img-slide">
									<img src="<?= bloginfo('url') ?>/wp-content/uploads/2021/12/ilustra-header@2x.png" alt="Second slide">
								</div>

							</div>

						</div>
					</div>

				</div>
			</div>
		</div><!-- -->

    </section>

    <div class="borda-sessao2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 260"><path fill="#426AA8" fill-opacity="1" d="M0,224L48,192C96,160,192,96,288,74.7C384,53,480,75,576,101.3C672,128,768,160,864,170.7C960,181,1056,171,1152,144C1248,117,1344,75,1392,53.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </div>
    <section class="sessao2">
	<div class="container">
				<div class="row">
					<div class="col-6">
						<h1 id="sessao2-titulo1">Ecoparque</h1>
						<h1 id="sessao2-titulo2">Industrial</h1>
						<h5>O Ecoparque Sul Fluminense é uma oportunidade para empresas em busca de uma nova forma de produzir​</h5>
					</div>
				</div>
				<div class="row">
					<div class="col-12" data-aos="fade-up" data-aos-duration="3000">
						<div id="carouselMapa" class="carousel slide carousel-fade" data-ride="carousel"  data-interval="3000" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/svg/Mapa_Base.svg');"> 
							
							<div class="carousel-inner" role="listbox">
								
								<div class="carousel-item active ">
									<img class="img-banner-sessao2" src="<?php echo get_template_directory_uri(); ?>/assets/Banner/Mapa_Banner-1.png" alt="Contribuições socioambientais">
									<div class="carousel-caption carousel-fade d-none d-md-block">
										<h3>Contribuições socioambientais</h3>
									</div>
								</div> 
								<div class="carousel-item ">
									<img class="img-banner-sessao2" src="<?php echo get_template_directory_uri(); ?>/assets/Banner/Mapa_Banner-2.png" alt="Localização Privilegiada">
									<div class="carousel-caption  carousel-fade d-none d-md-block">
										<h3>Localização Privilegiada</h3>
									</div>
								</div>
								<div class="carousel-item ">
									<img class="img-banner-sessao2" src="<?php echo get_template_directory_uri(); ?>/assets/Banner/Mapa_Banner-3.png" alt="Infraestrutura diferenciada">
									<div class="carousel-caption carousel-fade  d-none d-md-block">
										<h3>Infraestrutura diferenciada</h3>
									</div>
								</div>
								<div class="carousel-item ">
									<img class="img-banner-sessao2" src="<?php echo get_template_directory_uri(); ?>/assets/Banner/Mapa_Banner-4.png" alt="Topografia plana">
									<div class="carousel-caption carousel-fade d-none d-md-block">
										<h3>Topografia plana</h3>
									</div>
								</div>
								<div class="carousel-item ">
									<img class="img-banner-sessao2"src="<?php echo get_template_directory_uri(); ?>/assets/Banner/Mapa_Banner-5.png" alt="Princípios ecológicos">
									<div class="carousel-caption carousel-fade d-none d-md-block">
										<h3>Princípios ecológicos</h3>
									</div>
								</div>
                                <div class="carousel-item ">
									<img class="img-banner-sessao2" src="<?php echo get_template_directory_uri(); ?>/assets/Banner/Mapa_Banner-6.png" alt="Futuros Incentivos fiscais">
									<div class="carousel-caption carousel-fade d-none d-md-block">
										<h3>Futuros Incentivos fiscais</h3>
									</div>
								</div>
								<div class="carousel-item">
									<img class="img-banner-sessao2" src="<?php echo get_template_directory_uri(); ?>/assets/Banner/Mapa_Banner-7.png" alt="Sinergia entre as empresas">
									<div class="carousel-caption carousel-fade d-none d-md-block">
										<h3>Sinergia entre as empresas</h3>
									</div>
								</div>
								<div class="carousel-item ">
									<img class="img-banner-sessao2" src="<?php echo get_template_directory_uri(); ?>/assets/Banner/Mapa_Banner-8.png" alt="Oportunidades de inovação">
									<div class="carousel-caption carousel-fade d-none d-md-block">
										<h3>Oportunidades de inovação</h3>
									</div>
								</div>
								<div class="carousel-item  ">
									<img class="img-banner-sessao2" src="<?php echo get_template_directory_uri(); ?>/assets/Banner/Mapa_Banner-9.png" alt="Economia Circular">
									<div class="carousel-caption carousel-fade d-none d-md-block">
										<h3>Economia Circular</h3>
									</div>
								</div> 
								
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</section><!-- Fim sessão 2 -->
		<div id="fundo-verde"></div>
		<section class="sessao3"><!-- sessão 3 -->
			<div class="container">
				<div id="sessao3-linha1" class="row sessao3-texto1">
					<div class="col-12" data-aos="fade-right" data-aos-duration="3000" data-aos-anchor-placement="top-bottom">
						<p class="text-left">O Ecoparque Sul Fluminense foi concebido muito antes da popularização do conceito de ESG (Enviromental, Social and Governance)​</p>
					</div>
				</div>
				<div id="sessao3-linha2" class="row" >
					<div id="img-1" class="col-6">
						<img data-aos="fade-up" data-aos-duration="3000" src="<?= bloginfo('url') ?>/wp-content/uploads/2021/12/img-home.png" alt="">
					</div>
					<div class="col-6">
						<p class="sessao3-texto2-tipo1">O Grupo Porto Real está lançando um projeto inovador para investidores, parceiros e empresas, que vai transformar osul do estado​.</p>
						<div class="fundo-verde">
						<p id="texto-fundo-verde" class="sessao3-texto2-tipo3">O ECOPARQUE SUL-FLUMINENSE OCUPA UMA ÁREA DE 20 KM² EM RESENDE (RJ), NUMA LOCALIZAÇÃO PRIVILEGIADA ENTRE OS TRÊS MAIORES CENTROS URBANOS DO BRASIL, COM ACESSO À RODOVIA PRESIDENTE DUTRA, FERROVIA E AEROPORTO.</p>
						</div>
						
						<p id="texto-abaixo-fundo-verde" class="sessao3-texto2-tipo1">Totalmente privado e alinhado às melhores práticas de mercado, o empreendimento busca indústrias e empresas de todos portes e segmentos para criar um ambiente que garanta lucro, inserção regional e benefícios socioambientais.</p>
						<p class="sessao3-texto2-tipo2">Além disso, queremos ser um centro de incubação de startups e logística. </p>
						<p class="sessao3-texto2-tipo1">O polo será uma ponte entre pessoas, negócios e organizações, criando novos fluxos e oportunidades. Nossa proposta de sinergia promoverá resultados positivos para os parceiros.</p>
					</div>
				</div>
				<div id="sessao3-linha3" class="row">
					<div id="sessao3-caixa-azul" class="col-8">
						<p>Num paradigma de preservação ecológica inédito no Brasil, o Ecoparque Sul-fluminense será vanguarda industrial e urbanística, com diversidade de negócios.</p>
						<a href="#">Saiba mais</a>
					</div>
					<div id="img-2" class="col-4">
						<img data-aos="fade-down"   data-aos-easing="linear" data-aos-duration="1500" src="<?= bloginfo('url') ?>/wp-content/uploads/2021/12/ilustra-home.png" alt="">
					</div>
				</div>
			</div>
		</section><!-- Fim sessão 3 -->

		
		<section class="sessao4"><!-- Sessão 4 -->
			<div class="container-fluid" style="background-image: url('<?= bloginfo('url') ?>/wp-content/uploads/2021/12/banner-home.png');">
				<div class="row ">
					<div id="sessao4-grupoTexto" class="col-md-6" data-aos="fade-up" data-aos-duration="3000">
						<p id="sessao4-texto1">“O grupo não está fazendo nada imediatista. Estamos trabalhando com valores importantes para o futuro, em busca de renda com sustentabilidade.”</p>
						<p id="sessao4-texto2">– Henrique Saladini</p>
					</div>
					<div class="col-md-6">
						<div id="sessao4-btn">
							<a href="#">Conheça nossa história</a>
						</div>
					</div>
				</div>
			</div>
		</section><!-- Fim sessão 4 -->

		<section class="sessao5"><!-- Sessão 5 -->
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h3 id="sessao5-texto">FIQUE POR DENTRO</h3>
					</div>
				</div>

				
    		<!-- Swiper-->
				<div class="swiper mySwiper">
					<div class="swiper-wrapper">
						<?php publicacoesSlideHome(); ?> 
					</div>

					
					<!-- <div class="swiper-button-right">
					<img src="<?php // echo get_template_directory_uri(); ?>/assets/images/setaright.png" alt="" srcset="">
					</div>
						<div class="swiper-button-left">
						<img src="<?php // echo get_template_directory_uri(); ?>/assets/images/setaleft.png" alt="" srcset="">
						</div>
					</div> -->


		</div> 

		</section><!-- Fim sessão 5 -->

	</main><!-- #main -->

<?php

get_footer();
			
