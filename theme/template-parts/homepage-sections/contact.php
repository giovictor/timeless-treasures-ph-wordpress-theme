<?php
	/**
	 * Template part for displaying the contact section in homepage
	 */
	$homePageId = get_page_by_title('home')->ID;
	$contactTitle = get_field('contact_title') ? get_field('contact_title') : get_field('contact_title', $homePageId);
?>

<section id="contact" class="h-full">
	<div class="grid grid-cols-12 gap-1">
		<div class="hidden lg:block contact-img col-span-6 mr-16 h-full bg-cover bg-no-repeat bg-center">
		</div>

		<div class="col-span-12 lg:col-span-6 mx-8 sm:mx-10 md:mx-16">
			<h3 class="secondary-font mt-8 mb-4 md:mt-16 md:mb-8"><?php echo $contactTitle; ?></h3>
			<?php echo do_shortcode('[contact-form-7 id="8beea5b" title="Timeless Treasures Contact Form"]'); ?>
		</div>
	</div>
</section>
