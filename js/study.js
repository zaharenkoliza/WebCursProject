function handleResize() {
	if (window.innerWidth <= 430) {
		document.getElementsByClassName('swiper-wrapper')[0].remove("swiper-wrapper");}
}

window.addEventListener('resize', handleResize);
handleResize();