<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Главная</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="../css/uikit.css">
      <link rel="stylesheet" href="../css/main.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Bellota+Text:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
   </head>

   <body>
      <section class="main_section">
         <div id='grad_label'>
         <div id="grad"></div>
         <div id="label">
            <h1>РЕПЕТИТОР</h1>
            <p>МАТЕМАТИКА</p>
            <p>ИНФОРМАТИКА</p>
         </div>
</div>
      </section>
      <main>
      <section class="picture_text">
         <div>
               <div id="line"></div>
               <h1>ЗАХАРЕНКО<br>ЕЛИЗАВЕТА</h1>
            <p class="bold_paragraph bellota_typeface">Преподаватель программирования<br>Репетитор по математике<br>и информатике</p>
            <p class="light_paragraph bellota_typeface">Золотая медалистка<br>100 баллов за ЕГЭ по информатике<br>Призёр олимпиады ОРМО по математике<br>Студентка университета ИТМО</p>
         </div>
         <img src="../img/pict2.png" alt="">
      </section>
      </main>
      <section class="accordions">
      <div>
         <details>
            <summary>Как проходит обучение?</summary>
            <p>После определения точек роста на&nbsp;пробном занятии с&nbsp;учеником, мы&nbsp;определяемся с&nbsp;количеством занятий в&nbsp;неделю и&nbsp;выстраиваем примерное расписание тем на&nbsp;месяц. Обучение проходит в&nbsp;онлайн-формате с&nbsp;помощью видеозвонков и&nbsp;интерактивной доски, к&nbsp;которой предоставлен круглосуточный доступ. Также мои ребята в&nbsp;любой момент могут обратиться ко&nbsp;мне за&nbsp;помощью по&nbsp;предмету и&nbsp;получить быстрый ответ. Домашнее задание высылаю в&nbsp;ЛС или выгружаю на&nbsp;доску, его можно будет сдать в&nbsp;любом удобном формате.</p>
            <div>
               <button class="button"><a href="?page=prices">Подробнее</a></button>
            </div>
        </details>
        <details>
            <summary>Что вы предлагаете?</summary>
            <p>Я&nbsp;готовлю ребят к&nbsp;сдаче выпускных экзаменов, таких как ЕГЭ и&nbsp;ОГЭ, а&nbsp;также помогаю подтянуть успеваемость и&nbsp;сдать ВПР для средней школы. Мы&nbsp;работаем в&nbsp;онлайн-формате с&nbsp;использованием интерактивной доски, к&nbsp;которой ученик имеет круглосуточный доступ. Материалы и&nbsp;домашнее задание прикрепляется к&nbsp;доске, либо отправляется в&nbsp;лс&nbsp;ТГ. Мои ученики так&nbsp;же в&nbsp;любой момент могут написать мне и&nbsp;получить помощь по&nbsp;заданию, которое вызвало у&nbsp;них сложности. </p>
            <div>
               <button class="button"><a href="?page=prices">Подробнее</a></button>
            </div>
        </details>
        <details>
            <summary>Почему я должен вам доверять?</summary>
            <p>Не&nbsp;должны, но&nbsp;можете :) В&nbsp;2021 году я&nbsp;сдала ЕГЭ по&nbsp;информатике на&nbsp;100&nbsp;баллов, в&nbsp;сумме за&nbsp;три предмета вышло 286, но&nbsp;в&nbsp;списках абитуриентов с&nbsp;достижениями эта цифра поднялась до&nbsp;300&nbsp;баллов. Правда в&nbsp;итоге это даже не&nbsp;пригодилось, и&nbsp;я&nbsp;поступила по&nbsp;БВИ, благодаря призовому месту на&nbsp;олимпиаде ОРМО по&nbsp;математике. Первый ученик, которого я&nbsp;готовила к&nbsp;ЕГЭ, сдал его на&nbsp;93&nbsp;балла.</p>
            <div>
               <button class="button"><a href="?page=people">Отзывы</a></button>
               <button class="button"><a href="?page=study">Образование</a></button>
            </div>
        </details>
        <details>
         <summary>Как записаться на занятие?</summary>
         <p>Оставьте свои контактные данные по&nbsp;форме ниже, и&nbsp;я&nbsp;свяжусь с&nbsp;вами, чтобы обсудить детали и&nbsp;согласовать дальнейшую работу. Так&nbsp;же вы&nbsp;можете выбрать свободный слот на&nbsp;странице с&nbsp;расписанием, в&nbsp;таком случае нужно будет обязательно дождать подтверждения.</p>
         <div>
            <button class="button" onclick='showPopup(0)'> 
               <a href='#'>Записаться
               </a>
            <button class="button"><a href="?page=schedule">Расписание</a>
            </button>
         </div>
     </details>
      </div>
   </section>
   </body>