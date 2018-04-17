<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package chef_brian
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<?php global $post; ?>
<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'chef_brian' ); ?></a>
	<?php if (!is_front_page() && get_post_type($post->id) == 'page') { ?>
		<div class="header_img bgimg" style="background-image:url(<?php the_post_thumbnail_url($post -> id, 'large');  ?>)">
	<?php } ?>
	<header id="masthead" class="site-header">
		<div class="">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
				//the_custom_logo();

				$chef_brian_description = get_bloginfo( 'description', 'display' ); ?>
				<p class="site-description"><?php echo $chef_brian_description; /* WPCS: xss ok. */ ?></p>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class=" main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'chef_brian' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	<?php if (!is_front_page() && get_post_type($post->id) == 'page') { ?>
		<div class='title-container'><h1 class="entry-title"><?php echo get_the_title($post -> id); ?></h1></div>
		</div>
	<? } ?>
	<div id="content" class="site-content">
