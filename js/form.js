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

for (let i = 0; i < 2; i++) {
document.getElementsByClassName('form')[i].addEventListener('submit', function(event) {
  event.preventDefault();
});}

function handleForm(number) {

  var form = document.getElementsByClassName('form'); 
  var formData = new FormData(form[number]);

  var xhr = new XMLHttpRequest();

  xhr.open('POST', '../get.php', true); 
  xhr.onload = function() {
    if (xhr.status >= 200 && xhr.status < 300) {
      console.log('Успешно отправлено!');
      
    } else {
      console.error('Произошла ошибка при отправке запроса');
     
    }
  };

  xhr.onerror = function() {
    console.error('Ошибка сети');
  };

  xhr.send(formData);

  return false;
}
