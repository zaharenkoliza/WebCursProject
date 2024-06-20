<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из POST-запроса
    $parent_name = $_POST["parent_name"];
    $name = $_POST["name"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $tel = $_POST["tel"];
    $subject = $_POST["subject"];
    $course = $_POST["course"];
    $comment = $_POST["comment"];

    // Получаем текущее время
    $current_time = date("Y-m-d H:i:s");

    // Открыть текстовый файл для записи
    $f = fopen("textfile.txt", "a");
    if ($f) {
        // Записать текст в файл
        fwrite($f, "Время отправки: $current_time\n");
        fwrite($f, "Ваше имя: $parent_name\n");
        fwrite($f, "Имя ученика: $name\n");
        fwrite($f, "Дата занятия: $date\n");
        fwrite($f, "Время начала занятия: $time\n");
        fwrite($f, "Номер телефона: $tel\n");
        fwrite($f, "Предмет: $subject\n");
        fwrite($f, "Класс обучения: $course\n");
        fwrite($f, "Комментарии: $comment\n");
        
        // Закрыть текстовый файл
        fclose($f);
    } else {
        echo "Ошибка открытия файла для записи.";
    }
} else {
    echo "Неверный метод запроса.";
}
?>