<!DOCTYPE html>
<html>
   <head>
   <link rel="stylesheet" href="../css/uikit.css">
   <link rel="stylesheet" href="../css/form.css">
   </head>

   <body>
      <div class='popup-overlay'>
      <section class='popup'>
         <img src="../img/to_close.svg" alt="">
         <div class='popup-content main'>
         <h2>Записать на занятие</h2>
         <button class='button'>Себя</button>
         <button class='button'>Другого человека</button>
</div>
<div class='popup-content'>
         <h2>Записать на занятие</h2>
         <form class='form' method="POST">
    <div class="placeholder-container">
        <input type="text" name="parent_name" placeholder=" " />
        <label>Ваше имя*</label>
    </div>
    <div class="placeholder-container">
        <input type="text" name="name" placeholder=" " />
        <label>Имя ученика*</label>
    </div>
    <div class="placeholder-container">
        <input type="date" name='date' placeholder=" " />
        <label>Дата занятия</label>
    </div>
    <div class="placeholder-container">
        <input type="time" name='time' placeholder=" " />
        <label>Время начала занятия</label>
    </div>
    <div class="placeholder-container">
        <input type="tel" id='tel' name='tel' placeholder="+7" />
        <label>Номер телефона*</label>
    </div>
    <div class="placeholder-container">
        <input type="text" name='subject' placeholder=" " />
        <label>Предмет</label>
    </div>
    <div class="placeholder-container">
        <input type="text" name='course' placeholder=" " />
        <label>Класс обучения</label>
    </div>
    <div class="placeholder-container">
        <input type="textarea" class='comment' placeholder=" " />
        <label>Комментарии</label>
    </div>
         <button class='button' type='submit' onclick="handleForm(0)">Записаться</button>
         </form>
         </div>
         <div class='popup-content'>
         <h2>Записать на занятие</h2>
         <form class="form" method="POST">
         <div class="placeholder-container">
        <input type="text" name="name" placeholder=" " />
        <label>Имя*</label>
</div>
    <div class="placeholder-container">
        <input type="date" name='date' placeholder=" " />
        <label>Дата занятия</label>
    </div>
    <div class="placeholder-container">
        <input type="time" name='time' placeholder=" " />
        <label>Время начала занятия</label>
    </div>
    <div class="placeholder-container">
        <input type="tel" name='tel' placeholder=" " />
        <label>Номер телефона*</label>
    </div>
    <div class="placeholder-container">
        <input type="text" name='subject' placeholder=" " />
        <label>Предмет</label>
    </div>
    <div class="placeholder-container">
        <input type="text" name='course' placeholder=" " />
        <label>Класс обучения</label>
    </div>
    <div class="placeholder-container">
        <input type="textarea" name='comment' placeholder=" " />
        <label>Комментарии</label>
    </div>
    <button class='button' type='submit' onclick="handleForm(1)">Записаться</button>
         </div>
         <div class='popup-content main'>
         <h2>Спасибо за заявку!</h2>
         <p>Ожидайте подтверждение
         в телеграм</p>
        </div>
      </section>
      </div>
      <script src='../js/form.js'></script>
   </body>
</html>