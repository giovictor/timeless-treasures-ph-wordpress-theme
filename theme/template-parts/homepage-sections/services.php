<?php
	/**
	 * Template part for displaying the services section in homepage
	 */
	$homePageId = get_page_by_title('home')->ID;
	$servicesTitle = get_field('services_title') ? get_field('services_title') : get_field('services_title', $homePageId);
	$servicesDescription = get_field('services_description') ? get_field('services_description') : get_field('services_description', $homePageId);

	$services = get_posts(array(
		'posts_per_page' => -1,
		'post_type'      => 'service',
		'order'          => 'ASC'
	));

	$data = [];

	foreach($services as $service) {
		$data[] = [
			'service'  => $service->post_title,
			'bg_image' =>  get_the_post_thumbnail_url($service->ID)
		];
	}
?>

<section id="services" class="h-full py-8 sm:py-12 lg:py-16">
	<div class="container mx-auto flex flex-col justify-center items-center">
		<h3 class="secondary-font mb-8 sm:mb-10"><?php echo $servicesTitle; ?></h3>
		<div class="font-light mx-8 sm:mx-16 lg:mx-20 mb-8 sm:mb-16 text-center"><?php echo $servicesDescription; ?></div>

		<div class="swiper threeColumnSwiper servicesSwiper">
			<div class="swiper-wrapper">
				<?php
					foreach($data as $row) {
				?>
					<div class="swiper-slide">
						<div class="service text-white mx-4 flex justify-center items-center secondary-font relative bg-cover bg-no-repeat bg-center cursor-pointer" style="background-image: url(<?php echo $row['bg_image'] ?>)">
							<div class="overlay absolute w-full h-full top-0 left-0"></div>
							<h4 class="text-center relative z-10 px-16"><?php echo $row['service']; ?></h4>
						</div>
					</div>
				<?php
					}
				?>
			</div>

			<div class="swiper-pagination"></div>
		</div>
	</div>
</section>
