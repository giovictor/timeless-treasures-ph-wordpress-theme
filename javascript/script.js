/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

// Swiper
import Swiper from 'swiper';
import { Pagination, Autoplay } from 'swiper/modules';

import 'swiper/css';
import 'swiper/css/pagination';

 new Swiper(".threeColumnSwiper", {
	modules: [Pagination, Autoplay],
	slidesPerView: 1,
	pagination: {
	  el: ".swiper-pagination",
	  clickable: true
	},
	autoplay: {
		delay: 3000,
		disableOnInteraction: false,
	},
	breakpoints: {
		1024: {
			slidesPerView: 3
		},
        640: {
			slidesPerView: 2
		}
	}
});

// Font Awesome
import '@fortawesome/fontawesome-free/js/all.js'


// custom scripts
const mobileNavToggle = document.querySelector('.mobileNavToggle')
const mainNav = document.querySelector('.mainNav')

mobileNavToggle.addEventListener('click', () => {
	let mainNavClassList = mainNav.classList

	if(mainNavClassList.contains('hidden')) {
		mainNavClassList.remove('hidden')
	} else {
		mainNavClassList.add('hidden')
	}
})
