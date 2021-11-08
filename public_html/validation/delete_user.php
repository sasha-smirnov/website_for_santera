<?php
    $mysql = new mysqli('localhost', 'varushka_users', 'TmVXX3i&', 'varushka_users');
    $id = $_COOKIE['id'];
    $email = $_COOKIE['email'];
    $mysql->query("DELETE FROM `users` WHERE `id` = '$id'");
    $mysql->query("DROP TABLE `$email`");
    $mysql->close();
    setcookie('id', $user['id'], time() - 3600, "/");
    setcookie('email', $user['email'], time() - 3600, "/");
    setcookie('user', $user['name'], time() - 3600, "/");
    setcookie('number', $user['number'], time() - 3600, "/");
    setcookie('city', $user['city'], time() - 3600, "/");
    header('Location: /');

?>