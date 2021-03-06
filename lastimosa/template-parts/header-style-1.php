<?php if ( ! defined( 'ABSPATH' ) ) die( 'Direct access forbidden.' ); ?>

<header id="masthead" class="<?php echo get_theme_mod( 'header_class' ); ?>" role="banner">
	
	<?php get_template_part( 'template-parts/header', 'topbar' );

	$header_layout  = lastimosa_get_option('header_layout');
	$class[] = 'header-main';
	$class[] = $header_layout['container'];
	if( !empty($class))			$attr['class'] = join(' ', $class);
	
	do_action( 'lastimosa_header_top' ); ?>

	<div <?php echo lastimosa_attr_to_html($attr); ?>>
		<div class="row">
			<div class="align-self-center col-md align-self-start">
				<?php lastimosa_logo(); ?>
			</div>
			<div class="align-self-center align-self-end text-md-right">
				<?php lastimosa_nav_menu( 'primary' ); ?>
			</div>
		</div>
	</div>

	<?php do_action( 'lastimosa_header_bottom' ); ?>

</header><!-- #masthead -->