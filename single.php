<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Five
 * @since Twenty Five 1.0
 */

get_header();?>
<div class="container">
	<div class="row">
        <div class="col-lg-9 col-md-8 col-sm-7">
        	<?php if ( have_posts() ) : ?>
				<div class="row box box-white">
        			<?php if ( function_exists('ts_breadcrumbs') ) : ts_breadcrumbs(); endif;?>
        			<?php
					// Start the loop.
					while ( have_posts() ) : the_post();
		
						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', "single" );
						
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) {
							comments_template();
						}
						
						if ( is_singular( 'attachment' ) ) {
							// Parent post navigation.
							the_post_navigation( array(
									'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'twentyfive' ),
							) );
						} elseif ( is_singular( 'post' ) ) {
							// Previous/next post navigation.
							the_post_navigation( array(
									'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfive' ) . '</span> ' .
									'<span class="screen-reader-text">' . __( 'Next post:', 'twentyfive' ) . '</span> ' .
									'<span class="post-title">%title</span>',
									'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfive' ) . '</span> ' .
									'<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfive' ) . '</span> ' .
									'<span class="post-title">%title</span>',
							) );
						}
					// End the loop.
					endwhile;
					?>
        		</div>
				<?php endif;?>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-5">
        	<?php //if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
        	<div class="row sidebar sidebar-right">
        		<?php dynamic_sidebar( 'sidebar-1' ); ?>
        	</div>
        	<?php //endif; ?>
        </div>
    </div>
</div>
<?php get_footer()?>
