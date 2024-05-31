<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package timelesstreasuresph
 */

?>

<footer id="colophon" class="flex items-center py-20 lg:py-0">
	<div class="container mx-auto">
		<div class="grid grid-cols-12 gap-1 lg:items-center">
			<div class="col-span-12 lg:col-span-4 mb-8 lg:mb-0 flex justify-center lg:justify-start">
				<img src="<?php echo get_template_directory_uri() . "/assets/images/footer-logo.jpg"; ?>" />
			</div>

			<div class="col-span-12 md:col-span-6 lg:col-span-4">
				<?php if ( has_nav_menu( 'menu-2' ) ) : ?>
					<nav aria-label="<?php esc_attr_e( 'Footer Menu', 'timeless-treasures-ph' ); ?>">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-2',
									'menu_class'     => 'footer-menu',
									'depth'          => 1,
								)
							);
						?>
					</nav>
				<?php endif; ?>
			</div>

			<div class="col-span-12 md:col-span-6 lg:col-span-4 relative">
				<span class="secondary-font mb-3 block">Follow us on:</span>
				<div class="flex items-center mb-6">
					<a href="#" target="_blank" class="mr-3">
						<img src="<?php echo get_template_directory_uri() . "/assets/images/facebook-logo.png"; ?>" />
					</a>

					<a href="#" target="_blank" class="mr-3">
						<img src="<?php echo get_template_directory_uri() . "/assets/images/instagram-logo.png"; ?>" />
					</a>

					<a href="#" target="_blank" class="mr-3">
						<img src="<?php echo get_template_directory_uri() . "/assets/images/tiktok-logo.png"; ?>" />
					</a>
				</div>

				<span class="block mb-3">Newsletter</span>
				<div class="relative w-72">
					<input type="text" placeholder="Sign up with your email" class="newsletter-email py-2 pl-2 w-72 text-sm focus:outline-none" />
					<button type="button" class="newsletter-email-button absolute text-white h-full right-0">
						<img src="<?php echo get_template_directory_uri() . "/assets/images/newsletter-icon.png" ?>" class="mx-auto w-1/2" />
					</button>
				</div>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
