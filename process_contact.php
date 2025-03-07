<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo 'Неверный формат электронной почты.';
    exit();
}

if (empty($name)) {
    echo 'Поле Ваше имя обязательно для заполнения.';
    exit();
}

if (empty($message) || strlen($message) < 10) {
    echo 'Сообщение должно содержать минимум 10 символов.';
    exit();
}

$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$message = htmlspecialchars($message);

echo 'Спасибо за ваше сообщение! Мы свяжемся с вами в ближайшее время.';
?>