<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package HappyTour
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	
	<?php $images = rwmb_meta( 'rw_gallery_thumb', 'type=image&size=large' ); 
	         if ( $images ) {?>
	         <div class="entry-gallery alignright">
		         <div class="slides">

	             
		            
		                 <?php foreach ( $images as $image ){?>
		                     
		                     <img src="<?php echo $image['url'] ?>" alt="<?php the_title(); ?>" />
		                  
		                  <?php } ?>

		                 
		            
	 			  <span class="cycle-prev"> <i class="fa fa-angle-left"></i> </span>
	              <span class="cycle-next"> <i class="fa fa-angle-right"></i> </span>
	             </div>
             </div>
	         <?php         
	              }
	          ?>
	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'happytour' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	
		
	

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'happytour' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->
