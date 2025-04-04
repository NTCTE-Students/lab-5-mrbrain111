<?php
$name = $_POST['name'];
$date = $_POST['date'];
$time = $_POST['time'];

if (empty($name)) {
    echo 'Поле Ваше имя обязательно для заполнения.';
    exit();
}

if (empty($date)) {
    echo 'Поле Дата бронирования обязательно для заполнения.';
    exit();
}

if (empty($time)) {
    echo 'Поле Время бронирования обязательно для заполнения.';
    exit();
}

$name = htmlspecialchars($name);
$date = htmlspecialchars($date);
$time = htmlspecialchars($time);

echo 'Ваше бронирование успешно оформлено!';
?>