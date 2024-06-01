<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package timelesstreasuresph
 */

?>

<footer id="colophon" class="flex items-center px-6 sm:px-0 py-8 lg:py-0">
	<div class="container mx-auto">
		<div class="grid grid-cols-12 gap-1 items-center">
			<div class="col-span-12 lg:col-span-4 mb-0 lg:mb-8 flex justify-center">
				<img src="<?php echo get_template_directory_uri() . "/assets/images/footer-logo.jpg"; ?>" class="footer-logo" />
			</div>

			<div class="col-span-6 lg:col-span-4 mb-8 flex justify-center">
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

			<div class="col-span-6 lg:col-span-4 mb-8 flex justify-center">
				<div class="social-media-and-newsletter">
					<span class="follow-us-on-label secondary-font mb-3 block">Follow us on:</span>
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

					<span class="newsletter-label block mb-3">Newsletter</span>
					<div class="relative">
						<input type="text" placeholder="Email Address" class="newsletter-email py-2 pl-2 w-36 sm:w-40 md:w-72 text-xs sm:text-sm focus:outline-none" />
						<button type="button" class="newsletter-email-button absolute text-white h-full right-0">
							<img src="<?php echo get_template_directory_uri() . "/assets/images/newsletter-icon.png" ?>" class="mx-auto w-1/2" />
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
