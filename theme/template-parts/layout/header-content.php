<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package timelesstreasuresph
 */

?>

<header id="masthead" class="h-screen w-full relative bg-cover bg-no-repeat bg-center">
	<div class="color-layer w-full h-full absolute top-0 left-0"></div>

	<div class="container mx-auto relative z-10">
		<div class="grid grid-cols-12 gap-1 items-center">
			<div class="col-span-4">
				<?php
					if ( function_exists( 'the_custom_logo' ) ) {
						the_custom_logo();
					}
				?>
			</div>

			<nav class="col-span-8" id="site-navigation" aria-label="<?php esc_attr_e( 'Main Navigation', 'timeless-treasures-ph' ); ?>">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
						)
					);
				?>
			</nav><!-- #site-navigation -->
		</div>
	</div>

	<div class="container mx-auto relative z-10">
		<div class="flex flex-col justify-center items-center">
			<?php
				$timeless_treasures_ph_description = get_bloginfo( 'description', 'display' );
				if ( $timeless_treasures_ph_description || is_customize_preview() ) :
			?>
				<p class="site-description secondary-font mt-20 text-center"><?php echo $timeless_treasures_ph_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php
				endif;
			?>

			<button class="primary-button text-white rounded-full px-8 py-2 mt-24">Shop Now</button>
		</div>
	</div>
</header><!-- #masthead -->
