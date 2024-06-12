<?php
	/**
	 * Template part for displaying the about us section in homepage
	 */
	$homePageId = get_page_by_title('home')->ID;
	$aboutUsTitle = get_field('about_us_title') ? get_field('about_us_title') : get_field('about_us_title', $homePageId);
	$aboutUsDescription = get_field('about_us_description') ? get_field('about_us_description') : get_field('about_us_description', $homePageId);
?>

<section id="about-us" class="h-full py-8 sm:py-12 lg:py-16">
	<div class="container mx-auto">
		<div class="grid grid-cols-12 gap-1">
			<div class="col-span-12 lg:col-span-6 mx-8 sm:mx-16 mb-8 sm:mb-16 lg:mb-0">
				<h3 class="secondary-font mb-4 sm:mb-8 text-center lg:text-left"><?php echo $aboutUsTitle; ?></h3>
				<div class="font-light text-center lg:text-left"><?php echo $aboutUsDescription; ?></div>
			</div>

			<div class="col-span-12 lg:col-span-6 mx-8 sm:mx-16">
				<img src="<?php echo get_template_directory_uri() . "/assets/images/about-us-image.jpg"; ?>" class="about-us-image" width="665" height="835" />
			</div>
		</div>
	</div>
</section>
