<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Web</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="../css/header.css">
      <link rel="stylesheet" href="../css/uikit.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Bellota+Text:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
   </head> 

<?php
$map['main'] = 'ГЛАВНАЯ';
$map['schedule'] = 'РАСПИСАНИЕ';
$map['study'] = 'ОБРАЗОВАНИЕ И&nbsp;ОПЫТ';
$map['prices'] = 'ФОРМАТ И ЦЕНЫ';
$map['people'] = 'ОТЗЫВЫ';

$page = trim($_GET['page']);

if (empty($page) || empty($map[$page])){
    header ('Location: index.php\?page=main');
    die();
}

echo '<div class="menu_cont">
<div class="burger_button">
    <input type="checkbox" id="burger-checkbox" class="burger-checkbox">
    <label for="burger-checkbox" class="burger"></label></div>';
echo '<ul class="menu">';

foreach($map as $key => $item){
    if ($page == $key){
        echo '<li><a class="active">' . $item . '</a></li>';
    }
    else{
        echo '<li><a href="?page=' . $key . '">' . $item . '</a></li>';
    }
}

echo '</ul></div>';
include '' . $page . '.php';
include "footer.php";
include "form.php";
?>
<script src='../js/header.js'></script>