// const swiper = new Swiper('.swiper', {
// 	// Optional parameters
// 	direction: 'horizontal',
// 	loop: true,
// 	effect: 'coverflow',
	
// 	CoverflowEffect: {
// 		stretch: '50px',
// 	},
 
// 	// If we need pagination
// 	pagination: {
// 	  el: '.swiper-pagination',
// 	},
 
// 	// Navigation arrows
// 	navigation: {
// 	  nextEl: '.swiper-button-next',
// 	  prevEl: '.swiper-button-prev',
// 	},
 
// 	// And if we need scrollbar
// 	scrollbar: {
// 	  el: '.swiper-scrollbar',
// 	},
//  });
const swiper = new Swiper('.swiper', {
	// Optional parameters
	direction: 'horizontal',
	loop: true,
	effect: 'coverflow',
	centeredSlides: true,
	slidesPerView: 'auto',
	
	coverflowEffect: {
	  rotate: 70,
	  stretch: 60,
	  depth: 100,
	  modifier: 1,
	  slideShadows: true,
	},
 
	// If we need pagination
	pagination: {
	  el: '.swiper-pagination',
	  clickable: true,
	},
 
	// Navigation arrows
	navigation: {
	  nextEl: '.swiper-button-next',
	  prevEl: '.swiper-button-prev',
	},
 
	// And if we need scrollbar
	scrollbar: {
	  el: '.swiper-scrollbar',
	},
 });
 
