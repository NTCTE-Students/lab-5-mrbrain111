<?php
$username = $_POST['username'];
$password = $_POST['password'];

if (empty($username)) {
    echo 'Поле Имя пользователя обязательно для заполнения.';
    exit();
}

if (empty($password)) {
    echo 'Поле Пароль обязательно для заполнения.';
    exit();
}

if (strlen($username) < 4) {
    echo 'Имя пользователя должно содержать минимум 4 символа.';
    exit();
}

$username = htmlspecialchars($username);
$password = htmlspecialchars($password);

echo 'Вы вошли в систему!';
?>