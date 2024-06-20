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
 // Проверяем ширину экрана и отключаем Swiper на мобильных устройствах
 if (window.innerWidth <= 640) {
	swiper.destroy(true, true);
 }
 }

 // Инициализируем Swiper при загрузке страницы
initializeSwiper();

// Перезапускаем Swiper при изменении размера окна
window.addEventListener('resize', function() {
  initializeSwiper();
});
