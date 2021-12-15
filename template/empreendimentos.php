<?php
/*
* Template name: Empreendimentos
*/

get_header();
?>

	<main id="sobre" class="site-main">
        <section class="banner-empreendimentos">
            <div class="container d-flex justify-content-center">
                <div class="container-banner">
                    <div class="titulo-banner pt-5">
                        <h2>O EMPREENDIMENTO</h2>
                        <p>O Ecoparque sul-fluminense será o primeiro polo industrial do Brasil a adotar uma filosofia de negócios e uma estrutura totalmente voltados para a sustentabilidade.</p>
                    </div>
                </div>
            </div>
        </section><!--Seção banners -->
        <div class="mapa-empreendimento pb-5" data-aos="fade-up" data-aos-duration="3000" >
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mapempreendimento.png" alt="First slide">
            </div>
        </div><!-- Mapa Empreendimento -->

        <section class="secao-proposta">
            <div class="container d-flex justify-content-center">
                <div class="texto-proposta">
                    <p>Nossa proposta é integrar o tecido industrial, urbano e ambiental, minimizando desperdícios com a reutilização de descartes e redução dos impactos ambientais.</p>
                
                <p>Contaremos com tecnologias que vão promover a sinergia entre os produtos, serviços e materiais nas cadeias de valor e reciclagem, criando um novo paradigma de negócios, totalmente privado <b>— existem atualmente 29 ecoparques em todo o mundo, segundo a ONU, mas nenhum deles nenhum no Brasil.<b> </p>
                </div>
            </div>
        </section><!-- Seção Proposta -->

        <section class="secao-video">
            <div class="container d-flex justify-content-center">
                <div class="titulo-video">
                    <h4>VEJA O VÍDEO INSTITUCIONAL</h4>
                </div>
            </div>    

        </section><!-- Seção video Institucional -->

        <section class="secao-institucional d-flex justify-content-center">
            <div class="video-institucional">
                <img src="" alt="" srcset="">
            </div>
        </section><!-- Video Institucional --> 

        <section class="secao-historia">
            <div class="container d-flex justify-content-center">
                <div class="container-texto-historia"  data-aos="fade-down" data-aos-duration="3000"> 
                    <h3>Pioneirismo</h3>
                    
                    <p>Com base em estudos ambientais e um plano de manejo, boa parte do território sul-fluminense é destinada à preservação ambiental, principalmente a faixa em torno do rio Paraíba do Sul, que constitui uma Área de Preservação Permanente (APP). Há também uma zona de amortecimento preestabelecida onde só poderão ser instalados empreendimentos de mínimo impacto ambiental.</p>
                    <p>O desenvolvimento do distrito industrial e seus projetos mobiliários deve estar de acordo com medidas de preservação ambiental e benefícios sociais. Tais princípios têm norteado às ações do Grupo Porto Real na região desde os anos 1950.</p>
                    <p>A intenção é conceber um encadeamento produtivo, integrado e interdependente, tendo em vista garantir, de maneira simultânea, sustentabilidade, inserção regional e competitividade.</P>
                    <p>O encadeamento proposto na criação do polo industrial caminha para a criação de uma simbiose, a partir da compreensão de que a indústria não tem a intenção de desequilibrar o meio ambiente, mas sim a ele se associar e se harmonizar. </p>
                </div>
                <div class="image-float-right">
                    <img data-aos="fade-down" src="<?= bloginfo('url') ?>/wp-content/uploads/2021/12/ilustra-home.png" alt="">
                </div>
                <div class="image-float-left">
                     <img data-aos="fade-left" data-aos-duration="3000" src="<?= bloginfo('url') ?>/wp-content/uploads/2021/12/img-home.png" alt="">
                </div>
            </div>
        </section><!-- Seção Historia -->

        <section class="secao-principios">
            <div class="container d-flex justify-content-center ">
                <div class="row container-slides-principios">
                    <div class="col-md-6">
                        
                        <div id="economia" class="icons-slide-empreendimentos d-flex align-items-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-economia.png" alt="" srcset="">
                            <h3>Economia<br>circular</h3>
                            <div class="set-slide-economia">
                                <i class="fas fa-caret-left"></i>
                            </div>
                            
                        </div>
                        <div id="ecologia" class="icons-slide-empreendimentos d-flex align-items-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-ecologia.png" alt="" srcset="">
                            <h3>Ecologia<br>industrial</h3>
                            <div class="set-slide-ecologia">
                                <i class="fas fa-caret-left"></i>
                            </div>
                        </div>
                        <div id="ecoparque"  class="icons-slide-empreendimentos d-flex align-items-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-ecoparque.png" alt="" srcset="">
                            <h3>Ecoparque<br>industrial</h3>
                            <div class="set-slide-ecoparque">
                                <i class="fas fa-caret-left"></i>
                            </div>
                        </div>
                    </div><!--COL MD 6 -->

                    <div class="col-md-6">
                        <div class="titulo-secao-slide">
                            <h2>NOSSOS</h2>
                            <h2>Principios</h2>
                        </div>
                        <div class="texto-slide-empreendimentos d-flex align-items-center">
                           
                        <!-- SLIDES ECONOMIA CIRCULAR -->
                        <div class="slide-economia">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <p>Trata-se de um complexo industrial em que os negócios cooperam entre si, de forma a garantir a redução de resíduos e poluição, compartilhando recursos como:​</p>
                                </div>
                                <div class="item">
                                    <p>A ideia é tornar a economia, que hoje é linear na forma ‘recursos-fabricação-uso-descarte’, em um circuito fechado visando a minimização da geração de resíduos e poluição.. <b>Veja o infográfico</b> <a href=""> aqui</a></p>
                                </div>
                                <div class="item">
                                    <p>Nesse sistema, é preciso fazer com que os produtos durem mais, o que traz ganhos de produtividade mas, principalmente, torna o processo produtivo muito mais sustentável. Todo resíduo deve virar matéria prima, como subproduto para outro processo industrial ou outra finalidade ambientalmente favorável.</p>
                                </div>

                            </div>
                        </div>
                       
    
                        <!-- SLIDES DA ECONOMIA CIRCULAR-->

                        <!-- SLIDES ECOLOGIA INDUSTRIAL -->
                        <div class="slide-ecologia-industrial">
                            <p>A ecologia industrial busca aplicar o conceito de economia, a partir de estudos de fluxo de matéria e energia (metabolismo). As áreas de estudo envolvem a descarbonização da produção, análise de ciclo de vida e eficiência ecológica.</p>
                        </div>
                        <!-- SLIDES DA ECOLOGIA INDUSTRIAL-->

                        <!-- SLIDES ECOPARQUE INDUSTRIAL -->
                        <div class="slide-ecoparque-industrial">
                        <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <p>Trata-se de um complexo industrial em que os negócios cooperam entre si, de forma a garantir a redução de resíduos e poluição, compartilhando recursos como:​</p>
                                </div>
                                <div class="item">
                                    <div class="lista-ecoparque-slide">
                                        <i class="fal fa-info-circle"></i><span>Informações</span>
                                    </div>
                                    <div class=" lista-ecoparque-slide">
                                        <i class="fal fa-info-circle"></i><span>Materiais</span>
                                    </div>
                                    <div class=" lista-ecoparque-slide">
                                        <i class="fal fa-info-circle"></i><span>Água</span>
                                    </div>
                                    <div class=" lista-ecoparque-slide">
                                        <i class="fal fa-info-circle"></i><span>Energia</span>
                                    </div>
                                    <div class="lista-ecoparque-slide">
                                        <i class="fal fa-info-circle"></i><span>Infraestrutura</span>
                                    </div>
                                </div>
    

                            </div>
                        </div>
                        <!-- SLIDES DA ECOPARQUE INDUSTRIAL-->
    
    
                         </div><!-- texto-slide-empreendimentos -->
                    </div><!--COL MD 6 -->
                </div>
            </div>
        </section> <!--slides principios -->

         <!-- SLIDE MOBILE PRINCIPIOS -->
         <section class="principios-mobile d-md-none d-sm-block">
            <div class="container">
                <div class="text-center titulo-principios-mobile">
                <h2>NOSSOS PRINCIPIOS</h2>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="slide-mobile-economia">
                             <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <p>Trata-se de um complexo industrial em que os negócios cooperam entre si, de forma a garantir a redução de resíduos e poluição, compartilhando recursos como:​</p>
                                </div>
                                <div class="item">
                                    <p>A ideia é tornar a economia, que hoje é linear na forma ‘recursos-fabricação-uso-descarte’, em um circuito fechado visando a minimização da geração de resíduos e poluição.. <b>Veja o infográfico</b> <a href=""> aqui</a></p>
                                </div>
                                <div class="item">
                                    <p>Nesse sistema, é preciso fazer com que os produtos durem mais, o que traz ganhos de produtividade mas, principalmente, torna o processo produtivo muito mais sustentável. Todo resíduo deve virar matéria prima, como subproduto para outro processo industrial ou outra finalidade ambientalmente favorável.</p>
                                </div>
                            </div>
                        </div>
                        <div class="box-titulo-slide">
                             <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-economia.png" alt="" srcset="">
                            <h3>Economia<br>circular</h3>
                        </div>
                    </div><!--COLUNA SLID MOBILE -->

                    <div class="col-md-3 mt-5 ">
                         <div class="mobile-ecologia">
                            <p>A ecologia industrial busca aplicar o conceito de economia, a partir de estudos de fluxo de matéria e energia (metabolismo). As áreas de estudo envolvem a descarbonização da produção, análise de ciclo de vida e eficiência ecológica.</p>
                        </div>
                        <div class="box-titulo-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-ecologia.png" alt="" srcset="">
                            <h3>Ecologia<br>industrial</h3>
                        </div>
                    </div><!--COLUNA SLID MOBILE -->

                    <div class="col-md-3">
                        <div class="slide-mobile-ecoparque">
                             <div class="owl-carousel owl-theme">
                             <div class="item">
                                    <p>Trata-se de um complexo industrial em que os negócios cooperam entre si, de forma a garantir a redução de resíduos e poluição, compartilhando recursos como:​</p>
                                </div>
                                <div class="item">
                                    <div class="lista-ecoparque-slide">
                                        <i class="fal fa-info-circle"></i><span>Informações</span>
                                    </div>
                                    <div class=" lista-ecoparque-slide">
                                        <i class="fal fa-info-circle"></i><span>Materiais</span>
                                    </div>
                                    <div class=" lista-ecoparque-slide">
                                        <i class="fal fa-info-circle"></i><span>Água</span>
                                    </div>
                                    <div class=" lista-ecoparque-slide">
                                        <i class="fal fa-info-circle"></i><span>Energia</span>
                                    </div>
                                    <div class="lista-ecoparque-slide">
                                        <i class="fal fa-info-circle"></i><span>Infraestrutura</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-titulo-slide">
                             <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-economia.png" alt="" srcset="">
                            <h3>Economia<br>circular</h3>
                        </div>
                    </div><!--COLUNA SLID MOBILE -->
                </div>
            </div>
        </section>
        <!-- SLIDE PRINCIOS MOBILE -->



        <section class="secao-demandas">
            <div class="container d-flex justify-content-center">
            
                <div class="row container-demandas ">
                <h2>DEMANDAS</h2>
                    <div class="row listas">
                    <div class="col-md-5 mr-5 " data-aos="fade-up" data-aos-duration="3000">
                        <div class="lista-demandas ">
                            <h3>Mercado de acumulação de energia elétrica:</h3>
                            <ul>
                                <li>Fabricação e montagem de <b>motores e micromotres elétricos;</b></li>
                                <li>Fabricação e montagem de <b>motores e micromotres elétricos;</b></li>
                                <li>Fabricação e montagem de <b>motores e micromotres elétricos;</b></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-5 ml-5" data-aos="fade-up" data-aos-duration="3000">
                        <div class="lista-demandas mt-5">
                            <h3>Indústria automobilística</h3>
                            <ul>
                                <li><b>Aumento de produção</b> últimos anos;</li>
                                <li><b>Nova geração de veículos,</b> com novas motorizações e tecnologias (elétricos); </li>
                                <li><b>Programa Rota 2030,</b> que tem como meta <b>melhorar em 11% a eficiência energética dos veículos até 2023,</b> ganhando redução de IPI em contrapartida;</li>
                                <li>Para os automóveis movidos à eletricidade. <b>redução de IPI de 25% para 7%.</b></li>
                            </ul>
                        </div>
                    </div>
                    </div>          

                </div>
            </div>
        </section><!-- demandas --> 


       

        <section class="secao-parceiros">
            <div class="container d-flex justify-content-center">
                <div class="container-parceiros ">
                    <div class="row titulo-parceiros">
                        <h3>PARCEIROS</h3>
                    </div>
                    <div class="row logos-parceiros">
                        <img height="auto" src="<?= bloginfo('url') ?>/wp-content/uploads/2021/12/logo-sorocabacom_desenvolvimento.png" 
                        alt="Sorocabacom" />

                        <img height="auto" src="<?= bloginfo('url') ?>/wp-content/uploads/2021/12/logo-sorocabacom_desenvolvimento.png" 
                        alt="Sorocabacom" />

                        <img height="auto" src="<?= bloginfo('url') ?>/wp-content/uploads/2021/12/logo-sorocabacom_desenvolvimento.png" 
                        alt="Sorocabacom" />

                        <img height="auto" src="<?= bloginfo('url') ?>/wp-content/uploads/2021/12/logo-sorocabacom_desenvolvimento.png" 
                        alt="Sorocabacom" />
                    </div>
                </div>
            </div>          
        </section><!-- Seção de Parceiros -->

	</main><!-- #main -->

<?php

get_footer();
			
