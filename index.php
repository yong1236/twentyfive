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
        	<?php if(is_home() ):?>
<!--         	<div class="row box box-white"> -->
        		
<!--         	</div> -->
        	<?php endif;?>
        	<?php if ( have_posts() ) : ?>
	        	<?php if ( is_home() && ! is_front_page() ) : ?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>
				<?php endif; ?>
				<?php if(is_page() || is_single() || is_singular() ):?>
				
				<?php elseif(is_home() ) :?>
				<div class="row box  article-list"><!-- box-white -->
					<div class="title box-white"><h3>近期博文</h3></div>
					<?php //if ( function_exists('ts_breadcrumbs') ) : ts_breadcrumbs(); endif;?>
        			<?php
					// Start the loop.
					while ( have_posts() ) : the_post();
		
						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_format() );
		
					// End the loop.
					endwhile;
		
					// Previous/next page navigation.
					the_posts_pagination( array(
						'prev_text'          => __( 'Previous page', 'twentyfive' ),
						'next_text'          => __( 'Next page', 'twentyfive' ),
						'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfive' ) . ' </span>',
					) );
					?>
        		</div>
        		<?php else :?>
				<div class="row box article-list">
					<?php if ( function_exists('ts_breadcrumbs') ) : ts_breadcrumbs(); endif;?>
        			<?php
					// Start the loop.
					while ( have_posts() ) : the_post();
		
						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_format() );
		
					// End the loop.
					endwhile;
		
					// Previous/next page navigation.
					the_posts_pagination( array(
						'prev_text'          => __( 'Previous page', 'twentyfive' ),
						'next_text'          => __( 'Next page', 'twentyfive' ),
						'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfive' ) . ' </span>',
					) );
					?>
        		</div>
				<?php endif;?>
        	<?php 
        	// If no content, include the "No posts found" template.
        	else :
        		get_template_part( 'template-parts/content', 'none' );
        	endif;
        	?>
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
