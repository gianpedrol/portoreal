<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PortoRealSA
 */
	$menu = wp_get_nav_menu_items('Menu 1');
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

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.css" integrity="sha512-riTSV+/RKaiReucjeDW+Id3WlRLVZlTKAJJOHejihLiYHdGaHV7lxWaCfAvUR0ErLYvxTePZpuKZbrTbwpyG9w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	 <!-- Importação Google Fonts Urbanist -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<!-- Importação Google Fonts Urbanist -->
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
	</style>

	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

	<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />


	<!--Font Awesome 5.15 -->
	<script src="https://kit.fontawesome.com/b4e60eb143.js" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>


</head>
<!-- Fim Head --> 

<body id="corpo-ancora" <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'porto_real_sa' ); ?></a>

	<header>				
			<nav id="menu1" class="navbar">
				<a class="nav-link" href="<?= $menu[0]->url ?>"><?= $menu[0]->title ?></a>
				<a class="nav-link" href="<?= $menu[1]->url ?>"><?= $menu[1]->title ?></a>
				<?= the_custom_logo(); ?>
				<a class="nav-link" href="<?= $menu[2]->url ?>"><?= $menu[2]->title ?></a>
				<a class="nav-link" href="<?= $menu[3]->url ?>"><?= $menu[3]->title ?></a>
			</nav>

			<nav id="menu2" class="navbar fixed-top justify-content-between navbar-light">
			  	<a class="nav-link" href="<?= $menu[0]->url ?>"><?= $menu[0]->title ?></a>
				<a class="nav-link" href="<?= $menu[1]->url ?>"><?= $menu[1]->title ?></a>
				<a class="navbar-brand" href="http://localhost/porto-real/"><img src="<?= bloginfo('url') ?>/wp-content/uploads/2021/12/logo-menu.png" alt=""></a>
				<a class="nav-link" href="<?= $menu[2]->url ?>"><?= $menu[2]->title ?></a>
				<a class="nav-link" href="<?= $menu[3]->url ?>"><?= $menu[3]->title ?></a>
			</nav>

			<nav id="menu-mobile" class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="http://localhost/porto-real/"><img src="<?= bloginfo('url') ?>/wp-content/uploads/2021/12/logo-menu.png" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
	  <a class="nav-link" href="<?= $menu[0]->url ?>"><?= $menu[0]->title ?></a>
			
      </li>
      <li class="nav-item">
	  <a class="nav-link" href="<?= $menu[1]->url ?>"><?= $menu[1]->title ?></a>
      </li>
      <li class="nav-item">
	  <a class="nav-link" href="<?= $menu[2]->url ?>"><?= $menu[2]->title ?></a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="<?= $menu[3]->url ?>"><?= $menu[3]->title ?></a>
      </li>
    </ul>
  </div>
</nav>

	</header>	
