<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class("article box-white"); ?>>
	<div class="row info">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
      	<p class="introduce">
      	<?php 
      		if (has_excerpt()){
      			the_excerpt();
      		} else{
      			echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 300,"...");
      		}
      	?>
        </p>
    </div>
				<div class="row meta">
                  <div class="col-md-8">
                    <span class="meta-tag">
                      <i class="glyphicon glyphicon-th"></i>
                      <span class="category"><?php the_category(', ') ?></span>
                    </span>
                    <span class="meta-tag">
                      <i class="glyphicon glyphicon-calendar"></i>
                      <span class="date"><?php the_time('Y年m月d日') ?></span>
                    </span>
                    <span class="meta-tag">
                      <i class="glyphicon glyphicon-user"></i>
                      <span class="author"><a href="#"><?php the_author_nickname(); ?></a></span>
                    </span>
                  </div>
                  <div class="col-md-4 text-right">
                    <span class="meta-tag">
                      <a href="#">
                        <i class="glyphicon glyphicon-eye-open"></i>
                        <span>阅读:21次</span>
                      </a>
                    </span>
                    <span class="meta-tag">
                      <a href="#">
                        <i class="glyphicon glyphicon-comment"></i>
                        <span>评论:<?php echo get_comments_number(); ?>条</span>
                      </a>
                    </span>
                    <span class="meta-tag">
                      <a href="#">
                        <i class="glyphicon glyphicon-heart-empty"></i>
                        <span>2人喜欢</span>
                      </a>
                    </span>
                  </div>
                </div>
    
</article><!-- #post-## -->
