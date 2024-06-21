document.getElementById('burger-checkbox').addEventListener('change', function() {
   const menu = document.querySelector('.menu');
   const mediaQuery = window.matchMedia('(max-width: 760px)');
   if (this.checked || !mediaQuery.matches) {
     menu.style.transform = 'translateX(0)';
   } else {
   if (mediaQuery.matches){
     menu.style.transform = 'translateX(-100%)';
   }}
 });