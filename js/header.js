document.getElementById('burger-checkbox').addEventListener('change', function() {
   const menu = document.querySelector('.menu');
   const mediaQuery = window.matchMedia('(max-width: 430px)');
   if (this.checked || !mediaQuery.matches) {
     menu.style.transform = 'translateX(0)';
     //menu.style.display = 'grid';
   } else {const mediaQuery = window.matchMedia('(max-width: 430px)');
   if (mediaQuery.matches){
     menu.style.transform = 'translateX(-100%)';
     //menu.style.display = 'none';
   }}
 });