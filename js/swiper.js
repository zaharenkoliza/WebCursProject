const swiper = new Swiper('.swiper', {
	direction: 'horizontal',
	loop: true,
	effect: 'coverflow',
	centeredSlides: true,
	slidesPerView: 'auto',
	
	coverflowEffect: {
	  rotate: 70,
	  stretch: 60,
	  depth: 100,
	  modifier: 0,
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

 function initializeSwiper() {
 if (window.innerWidth <= 1000) {
	swiper.destroy(true, true);
 }
 }

initializeSwiper();

window.addEventListener('resize', function() {
  initializeSwiper();
});
