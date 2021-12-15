<?php
/**
 * Porto Real SA functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package PortoRealSA
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'porto_real_sa_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function porto_real_sa_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Porto Real SA, use a find and replace
		 * to change 'porto_real_sa' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'porto_real_sa', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'porto_real_sa' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'porto_real_sa_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'porto_real_sa_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function porto_real_sa_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'porto_real_sa_content_width', 640 );
}
add_action( 'after_setup_theme', 'porto_real_sa_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function porto_real_sa_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'porto_real_sa' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'porto_real_sa' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'porto_real_sa_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function porto_real_sa_scripts() {
	wp_enqueue_style( 'porto_real_sa-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'porto_real_sa-style', 'rtl', 'replace' );

	wp_enqueue_script( 'porto_real_sa-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'porto_real_sa_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function related_post() {
    $post_id = get_the_ID();
    $cat_ids = array();
    $categories = get_the_category( $post_id );

    if(!empty($categories) && is_wp_error($categories)):
        foreach ($categories as $category):
            array_push($cat_ids, $category->term_id);
        endforeach;
    endif;

    $current_post_type = get_post_type($post_id);
    $query_args = array( 

        'category__in'   => $cat_ids,
        'post_type'      => $current_post_type,
        'post_not_in'    => array($post_id),
        'posts_per_page'  => '6'
     );

    $related_cats_post = new WP_Query( $query_args );

    if($related_cats_post->have_posts()):
		while($related_cats_post->have_posts()): 
			$related_cats_post->the_post(); 
			$fields = get_fields(get_the_ID());
			$words = explode(" ", $fields['descricao']);
			$first = join(" ", array_slice($words, 0, 20)); ?>
            <div class="item">
				<div class="row align-items-start">
					<div class="col-md-1 borda-carousel">
						<span class=""> </span>
					</div>
					<div class="col-md-5 ">
						<div class="descritivo-produto">
							<h3><?php the_title(); ?></h3>							
							<p class="px-0 py-3"><?php echo $first ?></p>
							<a href="<?php the_permalink(); ?>">Confira <i class="fas fa-angle-right"></i> </a>
						</div><!-- Descritivo -->
					</div><!--Row Carousel-->
					<div class="col-md-6">
						<?php the_post_thumbnail( 'medium' ); ?>
					</div><!--Imagem Produto Carousel-->
				</div><!--Item 2 Carousel-->
			</div><!--Item 2 Carousel-->
        <?php endwhile;
		echo "</div>";
        wp_reset_postdata();
     endif;
}

function empreedimentos() {
    $args = array(
		'post_type'=> 'empreedimento',
		'posts_per_page' => '6'
	);              
	
	$the_query = new WP_Query( $args );
	if($the_query->have_posts() ) : 
		while ( $the_query->have_posts() ) : 
		   $the_query->the_post(); 
		?> 
			<div class="col-lg-3 col-md-6 px-0 mx-0 galeria-empreedimentos">
				<div class="card">
					<div class="imgBx">
						<img alt="<?php the_title(); ?>" height="300" src="<?php the_post_thumbnail_url('full'); ?>" />
					</div>
					<a href="<?php the_permalink(); ?>" class="details">
						<h2><?php the_title(); ?></h2>
					</a>
				</div>
			</div><!-- box projeto -->
		<?php   
		endwhile; 
		wp_reset_postdata(); 
	endif;
}

function publicacoes() {
    $args = array(
		'posts_per_page' => '9'
	);              
	
	$the_query = new WP_Query( $args );
	if($the_query->have_posts() ) : 
		while ( $the_query->have_posts() ) : 
		   $the_query->the_post(); 
		?> 
		<div class="col-md-3">
			<div class="post-box">
			<img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="<?php the_title(); ?>" srcset="<?php the_post_thumbnail_url('thumbnail'); ?>">
				<h3><?php the_excerpt();?></h3>
				<a href="<?php the_permalink(); ?>">VEJA MAIS</a>
			</div>
		</div>	
		<?php   
		endwhile; 
		wp_reset_postdata(); 
	endif;
}


function publicacoesSlideHome() {
	$args = array(
		'posts_per_page' => '9'
	);  
	
	$the_query = new WP_Query( $args );
	if($the_query->have_posts() ) : 
		while ( $the_query->have_posts() ) : 
		   $the_query->the_post(); 
		?> 
		<div class="swiper-slide">
			<div class="slide-post">
				<h3><?php the_title();?></h3>
				<p><?php the_excerpt();?></p>
				<a href="<?php the_permalink(); ?>">VEJA MAIS</a>
			</div>
		</div>	
		<?php   
		endwhile; 
		wp_reset_postdata(); 
	endif;
}
