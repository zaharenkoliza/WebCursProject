const popupOverlay = document.getElementsByClassName("popup-overlay")[0];
const popup = document.getElementsByClassName("popup")[0];
const popupContents = document.getElementsByClassName("popup-content");
const popup_buttons = popup.getElementsByClassName('button');
popup_buttons[0].addEventListener('click', () => showPopup(1));
popup_buttons[1].addEventListener('click', () => showPopup(2));
popup_buttons[2].addEventListener('click', () => showPopup(3));
popup_buttons[3].addEventListener('click', () => showPopup(3));
// привет!!!
 
console.log(popupContents);
function showPopup(number) {
  popupOverlay.style.display = "block";
  popupContents[number].style.display = "flex";
  for (let i = 0; i<popupContents.length; i++){
    if (i != number){
      popupContents[i].style.display = "none";
    }
  }
}
 
function hidePopup() {
  popupOverlay.style.display = "none";
}
 
popup.getElementsByTagName('img')[0].addEventListener('click', hidePopup);
popupOverlay.addEventListener("click", hidePopup);
popup.addEventListener("click", (event) => event.stopPropagation());

// const a = document.getElementsByClassName('form')[0];
// console.log(a);

for (let i = 0; i < 2; i++) {
document.getElementsByClassName('form')[i].addEventListener('submit', function(event) {
  event.preventDefault();
});}

function handleForm(number) {
  // Получаем данные формы
  var form = document.getElementsByClassName('form'); // здесь 'myForm' - это id вашей формы
  var formData = new FormData(form[number]);

  // Создаем объект XMLHttpRequest
  var xhr = new XMLHttpRequest();

  // Конфигурируем запрос
  xhr.open('POST', '../get.php', true); // замените '/url-обработчика' на URL вашего серверного скрипта, который будет обрабатывать данные

  // Устанавливаем заголовки, если это необходимо
  // xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  
  // Обработка события загрузки данных
  xhr.onload = function() {
    if (xhr.status >= 200 && xhr.status < 300) {
      // Если запрос успешно выполнен
      console.log('Успешно отправлено!');
      // Здесь можно добавить код для обработки успешной отправки данных
    } else {
      // Если произошла ошибка при выполнении запроса
      console.error('Произошла ошибка при отправке запроса');
      // Здесь можно добавить код для обработки ошибки отправки данных
    }
  };

  // Обработка события ошибки
  xhr.onerror = function() {
    console.error('Ошибка сети');
    // Здесь можно добавить код для обработки ошибки сети
  };

  // Отправляем данные
  xhr.send(formData);

  // Отменяем стандартное поведение формы
  return false;
}

