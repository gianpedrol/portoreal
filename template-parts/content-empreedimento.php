<?php
/**
 * Template part for displaying page content in projeto.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package PortoRealSA
 */
$principal = get_the_post_thumbnail();
?>

<div class="col-lg-3 col-md-4 galeria-empreedimentos">
	<a class="card" href="<?php echo get_permalink(); ?>">
		<div class="imgBx">
			<?php echo $principal; ?>
		</div>
		<div class="details">
			<h2><?php the_title(); ?></h2>
		</div>
	</a>
</div><!-- box projeto -->	