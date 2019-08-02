<?php
/**
 * Template part for displaying posts.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
        <div class="content-container">
    <h2 class="entry-title">Quote Authors</h2>
	
		<?php
// the query
$all_posts = new WP_Query( array( 'post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => -1 ) );

if ( $all_posts->have_posts() ) :
?>

  <ul>
    <?php while ( $all_posts->have_posts() ) : $all_posts->the_post(); ?>
	  <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
	  
    <?php endwhile; ?>
  </ul>

  
	
	


<?php else : ?>
  <p><?php _e( 'Sorry, no posts were found.' ); ?></p>
<?php endif; ?>

<?php wp_reset_postdata(); ?>




<h2>Categories</h2>
            <ul>
                <?php 
                    $categories = get_categories();
                    if ( $categories ) :
                    foreach($categories as $category) : ?>
                        <li><a href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>" title="<?php echo esc_attr( $category->name ); ?>"><?php echo esc_html( $category->name ); ?></a></li>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>


<h2>Tags</h2>
<ul>
    <?php
    $tags = get_tags();
    if ( $tags ) :
        foreach ( $tags as $tag ) : ?>
            <li><a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" title="<?php echo esc_attr( $tag->name ); ?>"><?php echo esc_html( $tag->name ); ?></a></li>
        <?php endforeach; ?>
    <?php endif; ?>
</ul>
	</div>
	</header><!-- .entry-header -->

	
		<?php the_excerpt(); ?>
	<!-- .entry-content -->
</article><!-- #post-## -->
