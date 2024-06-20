document.addEventListener('DOMContentLoaded', function() {
   // Получение текущего URL
   const currentPage = window.location.href;
   
   // Получение всех ссылок в навигации
   const links = document.querySelectorAll('.nav-links a');
   console.log(links);

   links.forEach(link => {
       link.addEventListener('click', function(event) {
           // Если ссылка указывает на текущую страницу
           if (link.href === currentPage) {
               event.preventDefault();
               window.scrollTo({
                   top: 0,
                   behavior: 'smooth'
               });
           }
       });
   });
});