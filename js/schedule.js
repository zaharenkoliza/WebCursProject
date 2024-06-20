let number = 1;
let pip = [];
const bigTable = document.getElementsByTagName('table')[0];
const bigTable2 = document.getElementsByTagName('table')[1];
const newTable = bigTable.cloneNode(true);
newTable.getElementsByTagName('thead')[0].remove();
// con
const f = newTable.getElementsByTagName('tbody')[0].getElementsByTagName('tr');
   for (let i = 0; i < f.length; i++){
      const ff = f[i].getElementsByTagName('th');
      console.log(ff);
      for (let j = ff.length - 1; j > 0; j--){
         ff[j].remove();
      }
   }
document.body.appendChild(newTable);
// Находим все элементы с классом 'selected-item'
const selectedItems1 = bigTable.querySelectorAll('.table-schedule__td');
const selectedItems2 = bigTable2.querySelectorAll('.table-schedule__td');
for (let j = 0; j < 14; j++){
   let spisok = [];
   
   if (number<8){
   for(let i=number-1; i<selectedItems1.length; i+=7){
      spisok.push(selectedItems1[i].cloneNode(true));
   }}
   else{
      for(let i=(number-1)%7; i<selectedItems2.length; i+=7){
         spisok.push(selectedItems2[i].cloneNode(true));
      }
   }
   // if (number>7){
   // for(let i=number-1; i<selectedItems.length; i+=7){
   //    spisok.push(selectedItems[i]);
   // }
   number++;
   pip.push(spisok);
}

console.log(pip);

const Items = document.querySelectorAll('.table-schedule__th');
const newDiv = document.createElement('select');
for (let j = 0; j < Items.length; j++){
   const newOp = document.createElement('option');
   newOp.value = j;
   newOp.appendChild(Items[j].cloneNode(true));
   newDiv.appendChild(newOp);
}
document.getElementById('select_cont').appendChild(newDiv);

// Функция для обновления содержимого
function updateContent() {
   const newValue = newDiv.value;
   if (newValue < 8){
   const f = newTable.getElementsByTagName('tbody')[0].getElementsByTagName('tr');


   for (let i = 0; i < f.length; i++){
      const ff = f[i].getElementsByTagName('th');
      for (let j = 1; j < ff.length; j++){
         ff[j].remove();
      }
      f[i].appendChild(pip[newValue][i]);
   }
}
else{
   const f = newTable.getElementsByTagName('tbody')[0].getElementsByTagName('tr');


   for (let i = 0; i < f.length; i++){
      const ff = f[i].getElementsByTagName('th');
      for (let j = 1; j < ff.length; j++){
         ff[j].remove();
      }
      f[i].appendChild(pip[newValue][i]);
   }
}
}

// Добавляем обработчик события change к элементу select
newDiv.addEventListener('change', updateContent);

// Инициализируем содержимое при загрузке страницы
updateContent();

function checkScreenWidth() {
   const mediaQuery = window.matchMedia('(max-width: 430px)');
   if (mediaQuery.matches) {
      bigTable.style.display = 'none';
      document.getElementsByClassName('newWeek')[0].style.display = 'none';
      newTable.style.display = 'block';
      newDiv.style.display = 'block';
   } else {
         newTable.style.display = 'none';
         bigTable.style.display = 'block';
      document.getElementsByClassName('newWeek')[0].style.display = 'flex';
      newDiv.style.display = 'none';
   }
}

// Проверка ширины экрана при загрузке страницы
checkScreenWidth();

window.addEventListener('resize', checkScreenWidth);