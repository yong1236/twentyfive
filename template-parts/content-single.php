<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class("col-sm-12 entry-single"); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
				<section class="entry-meta">
                  <span class="author">
                    <span class="meta-item">
                      <i class="glyphicon glyphicon-th"></i>
                      <span class="category"><?php the_category(', ') ?></span>
                    </span>
                    <span class="meta-item">
                      <i class="glyphicon glyphicon-calendar"></i>
                      <span class="date"><?php the_time('Y年m月d日') ?></span>
                    </span>
                    <span class="meta-item">
                      <i class="glyphicon glyphicon-user"></i>
                      <span class="author"><a href="#"><?php the_author_nickname(); ?></a></span>
                    </span>
                  </span>
                  <span class="comments pull-right">
                    <span class="meta-item">
                      <a href="#">
                        <i class="glyphicon glyphicon-eye-open"></i>
                        <span>阅读:21次</span>
                      </a>
                    </span>
                    <span class="meta-item">
                      <a href="#">
                        <i class="glyphicon glyphicon-comment"></i>
                        <span>评论:<?php echo get_comments_number()?>条</span>
                      </a>
                    </span>
                    <span class="meta-item">
                      <a href="#">
                        <i class="glyphicon glyphicon-heart-empty"></i>
                        <span>2人喜欢</span>
                      </a>
                    </span>
                  </span>
                </section>
                <section class="entry-tag">
                  <?php the_tags('') ?>
                </section>
	<section class="entry-content  clearfix"><!-- markdown-body -->
		<?php
			the_content();

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfive' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfive' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );

			if ( '' !== get_the_author_meta( 'description' ) ) {
				get_template_part( 'template-parts/biography' );
			}
		?>
	</section><!-- .entry-content -->

	<footer class="entry-footer">
		<?php //twentysixteen_entry_meta(); ?>
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentyfive' ),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
