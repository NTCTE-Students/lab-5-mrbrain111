<?php
$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

if ($password !== $confirm_password) {
    echo 'Пароли не совпадают.';
    exit();
}

if (empty($username)) {
    echo 'Поле Имя пользователя обязательно для заполнения.';
    exit();
}

if (empty($password)) {
    echo 'Поле Пароль обязательно для заполнения.';
    exit();
}

if (strlen($password) < 6) {
    echo 'Пароль должен содержать минимум 6 символов.';
    exit();
}

$username = htmlspecialchars($username);
$password = htmlspecialchars($password);

echo 'Регистрация прошла успешно!';
?>