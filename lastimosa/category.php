<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?>

<div id="main-content" class="<?php echo page_builder_container(); ?>">
	<section id="primary" class="<?php if(fw_ext_page_builder_is_builder_post($post->ID)): echo "content-area"; else: echo "container"; endif; ?>">
		<div id="content" class="site-content" role="main">

			<?php if ( have_posts() ) : ?>

			<header class="archive-header">
				<h1 class="archive-title"><?php printf( __( 'Category Archives: %s', 'unyson' ), single_cat_title( '', false ) ); ?></h1>
				<?php
				if( function_exists('fw_ext_breadcrumbs') ) {
					fw_ext_breadcrumbs();
				}
				?>
				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header><!-- .archive-header -->

			<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );

					endwhile;
					// Previous/next page navigation.
					fw_theme_paging_nav();

				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'template-parts/content', 'none' );

				endif;
			?>
		</div><!-- #content -->
	</section><!-- #primary -->
</div>

<?php
get_sidebar( 'content' );
get_sidebar();
get_footer();