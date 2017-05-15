<?php
/**
 *
 * Template name: Homepage
 * The template for displaying homepage.
 *
 * @package simple-store
 */
get_header();
?>

<?php get_template_part( 'template-part', 'head' ); ?>

<!-- start content container -->
<div class="row rsrc-content"> 
	<?php	$columns = (12 - get_theme_mod( 'left-sidebar-size', 3 ));  ?>    
		<?php get_sidebar( 'home' ); ?>   
    <div class="col-md-<?php echo absint( $columns );	?> rsrc-main-home">        
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>                                
			<div <?php post_class( 'rsrc-post-content' ); ?>>                                                      
				<div class="entry-content">                            
					<?php the_content(); ?>                            
				</div>
        <?php wp_link_pages(); ?>                                                       
			</div>        
		<?php endwhile; ?>        
		<?php else: ?>            
			<?php get_template_part( 'content', 'none' ); ?>        
		<?php endif; ?>    
	</div>
</div>
<!-- end content container -->
<?php get_footer(); ?>