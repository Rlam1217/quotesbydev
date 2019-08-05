<?php
/**
 * Template part for displaying posts.
 *
 * @package QOD_Starter_Theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	
	</header><!-- .entry-header -->

	<div class="entry-content">
	<?php the_excerpt(); ?>
	<?php the_title( '<h2 class="entry-title">- ', '</h2>' ); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->

