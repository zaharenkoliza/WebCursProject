<!DOCTYPE html>
<!-- ssh -L 5432:localhost:5432 s335141@helios.cs.ifmo.ru -p 2222 -->
<!-- INSERT INTO lessons (data_start, data_end, id_student, subject) values ('2024-06-03 14:00:00', '2024-06-03 16:00:00', 1, 'Информатика'); -->
<?php

$host = 'localhost';
$db = 'studs';
$user = 's335141';
$password = 'rKux7MCx0SKISIWe';

$dsn = "pgsql:host=$host;port=5432;dbname=$db;";

$pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
?>
<html>
   <head>
      <meta charset="utf-8">
      <title>Curs</title>
      <link rel="stylesheet" href="../css/schedule.css">
      <link rel="stylesheet" href="../css/header.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
   </head>

   <body>
      <div class='header'></div>
      <main>
   <h1>РАСПИСАНИЕ</h1>
   <button class='newWeek'>
      <span>следующая неделя</span>
      <img src="../img/arrow.png" alt="">
   </button>
   <button class='newWeek hidden__table'>
   <img class='mirrorY' src="../img/arrow.png" alt="">
      <span>предыдущая неделя</span>
   </button>
         <?php 
         $daysAgo = (getdate()['wday']+1)%8-2; // Количество дней назад, которые вы хотите получить
         $date = new DateTime(); // Получаем текущую дату и время
         $date->modify("-$daysAgo days"); // Вычитаем указанное количество дней

         $copyDate = $date;

         echo "<table>
            <thead>
               <tr><th class='table-schedule__timemark hidden'></th>";
         for ($i = 0; $i < 7; ++$i){
            echo "<th class='table-schedule__th'>" . substr($date->format('l'), 0, 3) . ", " . $date->format('d-m') . "</th>";
            $date->modify("+1 days");
         }    
         echo "</tr>
         </thead>";
         echo "<tbody>";
         for ($j = 10; $j < 20; ++$j){
            $time = ''.$j.':00';
            $date->modify("-7 days");
            echo '<tr>';
            echo "<th class='table-schedule__timemark'><div class='one'>" . $time . "</div></th>";
         
         for ($i = 0; $i < 7; ++$i){
            $sql = "SELECT data_start, data_end, firstname, surname, subject FROM lessons INNER JOIN stdnts ON lessons.id_student = stdnts.id_student WHERE data_start='" . $date->format('Y-m-d ' . $time . "") . "'";
            $query = $pdo->query($sql);
            $resultset = $query->fetchAll(\PDO::FETCH_ASSOC);
            if ($resultset){
               echo "<th class='table-schedule__td'><div class='two'><div class='two__subject'>" .$resultset[0]['subject']. "</div> <div class='two__name'><img src='../img/icon_for_lesson.png'>" .$resultset[0]['firstname'] . "</div> </div></th>";
            }
            else{
               echo "<th class='table-schedule__td'><div class='two'></div></th>";
            }
            $date->modify("+1 days");
         } 
         echo '</tr>'; 
      }
         echo "</table>";

         echo "<table class='hidden__table'>
         <thead>
            <tr><th class='table-schedule__timemark hidden'></th>";
      for ($i = 0; $i < 7; ++$i){
         echo "<th class='table-schedule__th'>" . substr($date->format('l'), 0, 3) . ", " . $date->format('d-m') . "</th>";
         $date->modify("+1 days");
      }    
      echo "</tr>
      </thead>";
      echo "<tbody>";
      for ($j = 10; $j < 20; ++$j){
         $time = ''.$j.':00';
         $date->modify("-7 days");
         echo '<tr>';
         echo "<th class='table-schedule__timemark'><div class='one'>" . $time . "</div></th>";
      
      for ($i = 0; $i < 7; ++$i){
         $sql = "SELECT data_start, data_end, firstname, surname, subject FROM lessons INNER JOIN stdnts ON lessons.id_student = stdnts.id_student WHERE data_start='" . $date->format('Y-m-d ' . $time . "") . "'";
         $query = $pdo->query($sql);
         $resultset = $query->fetchAll(\PDO::FETCH_ASSOC);
         if ($resultset){
            echo "<th class='table-schedule__td'><div class='two'><div class='two__subject'>" .$resultset[0]['subject']. "</div> <div class='two__name'><img src='../img/icon_for_lesson.png'>" .$resultset[0]['firstname'] . "</div> </div></th>";
         }
         else{
            echo "<th class='table-schedule__td'><div class='two'></div></th>";
         }
         $date->modify("+1 days");
      } 
      echo '</tr>'; 
   }
      echo "</table>";

   ?>

      <script src='../js/script1.js'></script>
            </main>
   </body>