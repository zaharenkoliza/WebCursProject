document.addEventListener('DOMContentLoaded', function() {
   const currentPage = window.location.href;

   const links = document.querySelectorAll('.nav-links a');
   console.log(links);

   links.forEach(link => {
       link.addEventListener('click', function(event) {
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