<?php
/**
 * Template Name: Archives
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
			<?php the_archive_title( '<h1 class="category-page-title">', '</h1>' ); ?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while (have_posts()) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content' );
				?>

	<?php endwhile; ?>

		<div class="page-links">
		<?php echo paginate_links( array(
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
		) ); ?>
		</div>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>


		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

