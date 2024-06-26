const but = document.getElementsByClassName('lesson__section__elem');

const texts = [
   [
       "Информатика — технический предмет, который изучают в школе с 7 класса. Не всем он даётся легко, так как там охватываются разные темы, для которых важно логическое и алгоритмическое мышление. ВПР по этому предмету не сдаётся. Но помогу освоить базовые понятия, решить задачи, а также научу работать с языками программирования и таким образом, повысить успеваемость в школе.", 
       "Математика — базовый школьный предмет, который часто может вызывать сложности в понимании. Он также является обязательным для сдачи ВПР в 5-8 классе. Помогу понять школьную программу и научу решать задания, как из домашней работы, так и из ВПР."
   ],
   [
       "Сдача ЕГЭ по информатике необходима людям, которые планируют поступать на технические специальности, связанные с программированием, анализом данных и тому подобным. Экзамен проходит в компьютерном формате, проверяется только ответ. Помогу изучить язык программирования Python с нуля, решить все типы заданий разными способам (аналитическим и программным), а также поработаем с алгоритмами.", 
       "Математика — базовый школьный предмет, который часто может вызывать сложности в понимании. В 11 классе можно выбрать из профильной и базовой математики. Исходить нужно из требований университета на интересующей специальности. Помогу определиться с целями на экзамен и разобраться со всеми заданиями."
   ],
   [
       "ОГЭ по информатике — одно из самых популярных направлений этого экзамена, так как задания считаются не особо сложными, и проходной балл набрать проще, чем на остальных предметах. Однако, без тщательной подготовки и нарешивания заданий не обойтись даже на таком экзамене. Помогу разобрать все типы заданий с полным понимаем алгоритма решения.", 
       "Математика — базовый школьный предмет, который часто может вызывать сложности в понимании. В 9 классе обязательно нужно сдать ОГЭ по математике, чтобы получить аттестат. Помогу разобрать все типы заданий и прорешать их в достаточном количестве."
   ]
];

prices = [
   ['800 ₽/час', '800 ₽/час'],
   ['1500 ₽/час', '1500 ₽/час'],
   ['1000 ₽/час', '1000 ₽/час']
];

console.log(texts);

let button_type = 1;
let button_subject = 0;
const text_for_lesson = document.getElementById('info');
const price_for_lesson = document.getElementById('price');

text_for_lesson.innerHTML = texts[1][0];

function changeStatus(element, replacement){
   const elem_img = element.getElementsByTagName('img')[0];
   const result = elem_img.src.slice(0, -11) + replacement + elem_img.src.slice(-4);
   elem_img.src = result;
}

const buttons = document.getElementsByClassName('lesson__section__elem');
for(let i=0; i<5; i++){
   buttons[i].addEventListener('click', () => {
      if (i < 3) {
         button_type = i;
         for(let j = 0; j < 3; j++){
            if (i != j){
               changeStatus(buttons[j], 'enabled');
            }
         }
      }
      else{
         button_subject = i % 3;
         for(let j = 0; j < 2; j++){
            if (i % 3 != j){
               changeStatus(buttons[j+3], 'enabled');
            }
         }
      }
      text_for_lesson.innerHTML = texts[button_type][button_subject];
      price_for_lesson.innerHTML = prices[button_type][button_subject];
      changeStatus(buttons[i], 'pressed');
   })
}

document.addEventListener('DOMContentLoaded', function() {
   const container = document.getElementsByClassName('picture_text')[0];
   const picture = document.getElementsByClassName('picture')[0];
   const content = document.getElementsByTagName('p');
   
   function moveElement() {
       const viewportWidth = window.innerWidth;
       if (viewportWidth <= 430) {
           container.getElementsByTagName('div')[0].insertBefore(picture, content[1]);
       } else {
           container.appendChild(picture);
       }
   }
   
   moveElement();
   
   window.addEventListener('resize', moveElement);
});