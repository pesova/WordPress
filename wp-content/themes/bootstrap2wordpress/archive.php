<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_To_WordPress
 */

get_header();
?>

	

	<?php if ( have_posts() ) : ?>
		<section class="feature-image feature-image-default" data-type="background" data-speed="2">
		
			
				<?php
				the_archive_title( '<h1 class="page-title">', '<small class="archive-description">' );
				the_archive_description( '', '</small></h1>' );
				?>
			
		</section>


	<div class="container">
		<div class="row" id="primary">
			<main id="content" class="col-sm-8">

			
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				* Include the Post-Type-specific template for the content.
				* If you want to override this in a child theme, then include a file
				* called content-___.php (where ___ is the Post Type name) and that will be used instead.
				*/
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
			</main>
			<aside class="col-sm-4">
				<?php get_sidebar(); ?>
			</aside>
			

		</div>
	</div>
	

<?php
get_footer();
