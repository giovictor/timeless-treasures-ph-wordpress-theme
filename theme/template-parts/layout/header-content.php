<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package timelesstreasuresph
 */

?>

<header id="masthead" class="h-full 2xl:h-screen w-full relative bg-cover bg-no-repeat bg-center">
	<div class="color-layer w-full h-full absolute top-0 left-0"></div>

	<div class="container mx-auto relative z-10">
		<div class="grid grid-cols-12 gap-1 sm:items-center">
			<div class="col-span-11 sm:col-span-12 lg:col-span-4 sm:flex sm:justify-center mb-0 sm:mb-8 lg:mb-0">
				<?php
					if ( function_exists( 'the_custom_logo' ) ) {
						the_custom_logo();
					}
				?>
			</div>

			<a href="javascript:void(0);" class="mobileNavToggle col-span-1 block sm:hidden text-white pt-8 text-xl relative"><i class="fa-solid fa-bars"></i></a>

			<nav class="mainNav col-span-12 lg:col-span-8 hidden sm:flex sm:justify-center" id="site-navigation" aria-label="<?php esc_attr_e( 'Main Navigation', 'timeless-treasures-ph' ); ?>">
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
				<p class="site-description secondary-font mt-4 sm:mt-16 2xl:mt-32 text-center"><?php echo $timeless_treasures_ph_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php
				endif;
			?>

			<button class="primary-button text-white rounded-full px-8 py-2 my-12 sm:my-24 2xl:mb-0">Shop Now</button>
		</div>
	</div>
</header><!-- #masthead -->
