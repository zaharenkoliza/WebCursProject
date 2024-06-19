<?php
$map['main'] = 'ГЛАВНАЯ';
$map['schedule'] = 'РАСПИСАНИЕ';
$map['study'] = 'ОБРАЗОВАНИЕ И ОПЫТ';
$map['prices'] = 'ФОРМАТ И ЦЕНЫ';
$map['people'] = 'ОТЗЫВЫ';

$page = trim($_GET['page']);

if (empty($page) || empty($map[$page])){
    header ('Location: http://localhost/index.php/?page=main');
    die();
}

echo '<ul class="menu">';

foreach($map as $key => $item){
    if ($page == $key){
        echo '<li><a class="active">' . $item . '</a></li>';
    }
    else{
        echo '<li><a href="?page=' . $key . '">' . $item . '</a></li>';
    }
}

echo '</ul>';
echo '<link rel="stylesheet" href="../css/header.css">';
include '' . $page . '.php';
include "footer.php";
include "form.php";
?>