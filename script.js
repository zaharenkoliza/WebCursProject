function isDateInWeek(dateToCheck, weekToCheck) {
   // Копируем дату для избежания изменений оригинальной даты
   var date = new Date(dateToCheck);
   
   // Получаем первый день недели (понедельник) и смещаемся на нужное количество недель
   var firstDayOfWeek = new Date(weekToCheck.getFullYear(), weekToCheck.getMonth(), weekToCheck.getDate() - weekToCheck.getDay());
   
   // Получаем последний день недели (воскресенье)
   var lastDayOfWeek = new Date(firstDayOfWeek.getFullYear(), firstDayOfWeek.getMonth(), firstDayOfWeek.getDate() + 6);
   
   // Проверяем, находится ли дата между началом и концом недели
   return date >= firstDayOfWeek && date <= lastDayOfWeek;
}

//alert(isDateInWeek(new Date(2024, 4, 20), new Date()));

var article = document.getElementsByClassName('hidden');

var now = new Date();
//var now = new Date(2024, 4, 23);

if (now.getMonth() == 4){
   document.getElementById('month').innerHTML = 'МАЙ';
}


for (var i = 0 ; i<article.length; i++){
   var start = article[i].dataset.start;
   var end = article[i].dataset.end;
   var name = article[i].dataset.name;

   var start_date = new Date(article[i].dataset.start.slice(0, 11));
   if (!isDateInWeek(start_date, now)){
      continue;
   }
   if (start_date.getDay() == 0){
      start_date = 6;
   }
   else{
      start_date = start_date.getDay() - 1;
   }

   var massiv = document.getElementsByClassName('table-schedule__td');
   var newELem = document.createElement('p');
   newELem.textContent = name;4
   massiv[start_date].querySelector("div").appendChild(newELem);
}

// var a = massiv[start_date].querySelectorAll("p");
// a[0].innerHTML = name;
// a[1].innerHTML = start.slice(10, 16);

var b = document.getElementsByClassName('table-schedule__th');
var day = now.getDay()-1;
var dayOfMonth = now.getDate();
for (var i = day;i<b.length;i++){
   b[i].innerHTML = dayOfMonth++;
}
var dayOfMonth = now.getDate();
for (var i = day;i>=0;i--){
   b[i].innerHTML = dayOfMonth--;
}
b[now.getDay()-1].innerHTML = now.getDate();
