<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package chef_brian
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post(); ?>
			<!-- <div class="header_img bgimg" style="background-image:url(<?php the_post_thumbnail_url(get_the_id(), 'large');  ?>)">
				<h1 class="entry-title"><?php echo get_the_title(); ?></h1>
			</div> -->
			<!-- <?php the_post_thumbnail(); ?> -->

			<?php the_content(); ?>

			<?php
			// get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
