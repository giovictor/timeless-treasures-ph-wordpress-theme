<?php
	/**
	 * Template part for displaying the services section in homepage
	 */

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

<section id="services" class="h-screen py-16">
	<div class="container mx-auto flex flex-col justify-center items-center">
		<h3 class="secondary-font text-center mb-16">Services</h3>

		<div class="grid grid-cols-12 gap-1 items-center">
			<?php
				foreach($data as $row) {
			?>
				<div class="service col-span-4 mx-4 flex justify-center items-center secondary-font relative rounded-3xl bg-cover bg-no-repeat bg-center cursor-pointer" style="background-image: url(<?php echo $row['bg_image'] ?>)">
					<div class="overlay absolute w-full h-full top-0 left-0 rounded-3xl"></div>
					<h4 class="text-center relative z-10 px-16"><?php echo $row['service']; ?></h4>
				</div>
			<?php
				}
			?>
		</div>
		
		<button class="primary-button text-white rounded-full px-8 py-2 mt-12">Shop Now</button>
	</div>
</section>
