<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Web</title>
      <link rel="stylesheet" href="../css/prices.css">
      <link rel="stylesheet" href="../css/header.css">
      <link rel="stylesheet" href="../css/uikit.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Bellota+Text:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
   </head> 

   <body>
   <div class='header'></div>
   <main>
      <div id='grad'></div>
   <section class="picture_text">
         <div>
            <h1>ОНЛАЙН</h1>
            <p class='after_h1'>формат</p>
            <p class="bold_paragraph bellota_typeface">Созвоны в удобном мессенджере, где есть демонстрация экрана и веб-камера</p>
            <div class='svg_plus_text'>
               <img src="../img/meets.svg" alt="">
               <span>Google Meets</span>
            </div>
         </div>
         <img src="../img/prices_1.png" alt="">
      </section>

      <section class="picture_text">
      <img id='picture_for_second_cont' src="../img/prices_2.png" alt="">
      <img id='special_picture_for_second_cont' src="../img/prices_3.png" alt="">
         <div>
            <h2>Интерактивная доска</h2>
            <p class="bold_paragraph bellota_typeface">Конспекты и&nbsp;решение задач в&nbsp;одном месте&nbsp;&mdash; функциональная интерактивная доска с&nbsp;круглосуточным доступом</p>
            <div class='svg_plus_text'>
               <img src="../img/miro.svg" alt="">
               <span>Miro</span>
            </div>
         </div>
      </section>
   <h2>Давайте подберём вам занятие</h2>
      <section class='lesson'>
         <p class='text_16 bellota_typeface'>Ваша цель подготовиться к:</p>
         <div class='lesson__section'>
            <div class='lesson__section__elem vpr' >
               <img src="../img/vpr_enabled.svg" alt="">
               <p>ВПР</p>
            </div>
            <div class='lesson__section__elem ege' >
               <img src="../img/ege_pressed.svg" alt="">
               <p>ЕГЭ</p>
            </div>
            <div class='lesson__section__elem oge' >
               <img src="../img/oge_enabled.svg" alt="">
               <p>ОГЭ</p>
            </div>
         </div>
      </section>
      <section class='lesson'>
         <p class='text_16 bellota_typeface'>Выберите предмет</p>
         <div class='lesson__section'>
         <div class='lesson__section__elem info' >
               <img src="../img/ege_pressed.svg" alt="">
               <p>Информатика</p>
            </div>
            <div class='lesson__section__elem math' >
               <img src="../img/vpr_enabled.svg" alt="">
               <p>Математика</p>
            </div>
         </div>
      </section>
      <section id='section_for_prices'>
      <p id='info' class='text_16 bellota_typeface'></p>
      <p class='bellota_typeface text_24'>занятия от одного раза в неделю</p>
      <p id ='price' class='text_60'>1500 ₽/час</p>
      <button class="button" onclick='showPopup(0)'>ЗАПИСАТЬСЯ</button>
      </section>
      </main>
      <script src='../js/prices.js'></script>
   </body>