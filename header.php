<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Five
 * @since Twenty Five 1.0
 */
?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <title>twenty five</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/styles/main.css">
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/vendor/modernizr.js"></script>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  	<!--[if lt IE 10]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <header>
      <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
		  	<?php
				wp_nav_menu( array(
					'theme_location' => 'primary',
					'menu_class'     => 'nav navbar-nav primary-menu',
				 ) );
			?>
        </div>
      </div>
    </header>
  	<div class="wrapper">