<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
    <?php the_title( '<h1 class="about-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="about-content-container">
   
		<q><div class="quote-wrapper"><?php the_content(); ?>
		</div></q>
		
		
		
		
	</div><!-- .entry-content -->
</article><!-- #post-## -->