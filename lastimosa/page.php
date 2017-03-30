<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 */

get_header(); ?>

<?php
if ( is_front_page() && fw_theme_has_featured_posts() ) {
	// Include the featured content template.
	get_template_part( 'featured-content' );
}
?>
<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">

		<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();

				// Include the page content template.
				get_template_part( 'template-parts/content', 'page' );
				
				// Checks if blog-post shortcode is used. 
				if(!function_exists('blog_post_check')):
					function blog_post_check() {
						return 'no';
					}
				endif;

				// If comments are open or we have at least one comment, load up the comment template.
				if ( (comments_open() || get_comments_number()) && (blog_post_check() == 'no') ) {
					comments_template();
				}
			endwhile;
		?>

	</div><!-- #content -->
</div><!-- #primary -->
<?php //get_sidebar( 'content' ); ?>

<?php
//get_sidebar();
get_footer();
