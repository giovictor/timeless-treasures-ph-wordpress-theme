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

import Swiper from 'swiper';
import { Pagination, Autoplay } from 'swiper/modules';

import 'swiper/css';
import 'swiper/css/pagination';

 new Swiper(".threeColumnSwiper", {
	modules: [Pagination, Autoplay],
	slidesPerView: 3,
	pagination: {
	  el: ".swiper-pagination",
	  clickable: true
	},
	autoplay: {
		delay: 3000,
		disableOnInteraction: false,
	},
});
