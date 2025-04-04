<?php
$email = $_POST['email'];

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo 'Неверный формат электронной почты.';
    exit();
}

$email = htmlspecialchars($email);

echo 'Вы подписались на нашу рассылку!';
?>