<?php
/**
 * The template part for displaying large featured images on posts.
 *
 * @package Newspack
 */

$featured_image_position = get_post_meta( get_the_ID(), 'newspack_featured_image_position', true );

if ( 'behind' === $featured_image_position ) :
?>

	<div class="featured-image-behind">
		<?php newspack_post_thumbnail(); ?>
		<div class="wrapper">
			<header class="entry-header">
				<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
			</header>
		</div><!-- .wrapper -->
	</div><!-- .featured-image-behind -->

<?php elseif ( 'beside' === $featured_image_position ) : ?>

	<div class="featured-image-beside">
		<div class="wrapper">
			<header class="entry-header">
				<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
			</header>
		</div><!-- .wrapper -->
		<?php newspack_post_thumbnail(); ?>
	</div><!-- .featured-image-behind -->

<?php else : ?>

	<header class="entry-header">
		<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
	</header>

	<?php
	newspack_post_thumbnail();
endif;
