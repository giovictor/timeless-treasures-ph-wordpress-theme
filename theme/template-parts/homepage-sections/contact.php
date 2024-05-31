<?php
/**
 * Template part for displaying the contact section in homepage
 */
?>

<section id="contact" class="h-full">
	<div class="grid grid-cols-12 gap-1">
		<div class="hidden lg:block contact-img col-span-6 mr-16 h-full bg-cover bg-no-repeat bg-center">
		</div>

		<div class="col-span-12 lg:col-span-6 mx-8 sm:mx-10 md:mx-16">
			<h3 class="secondary-font mt-8 mb-4 md:mt-16 md:mb-8">Get in Touch</h3>
			<p class="font-light mb-8">Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Sedtemporibus autem </p>
			<form>
				<div class="mb-6">
					<input type="text" class="w-full p-4 bg-transparent rounded-xl h-10" placeholder="Full Name" />
				</div>

				<div class="mb-6">
					<input type="text" class="w-full p-4 bg-transparent rounded-xl h-10" placeholder="Email" />
				</div>

				<div class="mb-6">
					<input type="text" class="w-full p-4 bg-transparent rounded-xl h-10" placeholder="Contact Number" />
				</div>

				<div class="mb-6">
					<textarea rows="10" class="w-full p-4 bg-transparent rounded-xl" placeholder="Message"></textarea>
				</div>

				<button class="primary-button text-white rounded-full px-8 py-2 mb-6 md:mb-16 lg:mb-8">Send</button>
			</form>
		</div>
	</div>
</section>
