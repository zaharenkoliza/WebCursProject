document.getElementsByClassName("newWeek")[0].addEventListener("click", function() {
   const tables = document.getElementsByTagName('table');

   tables[0].classList.add('hidden__table');

   tables[1].classList.remove('hidden__table');

   const buttons = document.getElementsByClassName('newWeek');

   buttons[0].classList.add('hidden__table');

   buttons[1].classList.remove('hidden__table');
});

document.getElementsByClassName("newWeek")[1].addEventListener("click", function() {
   const tables = document.getElementsByTagName('table');

   tables[0].classList.remove('hidden__table');

   tables[1].classList.add('hidden__table');

   const buttons = document.getElementsByClassName('newWeek');

   buttons[0].classList.remove('hidden__table');

   buttons[1].classList.add('hidden__table');
});

