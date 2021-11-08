<?php
    $email = filter_var(trim($_POST['email']), 
    FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']), 
    FILTER_SANITIZE_STRING);
    
    $password = md5($password."santerapass");
    
    $mysql = new mysqli('localhost', 'varushka_users', 'TmVXX3i&', 'varushka_users');
    
    $result = $mysql->query("SELECT * FROM `users` WHERE `email` = '$email' AND  `password` = '$password'");
    
    $user = $result->fetch_assoc();
    if(count($user) == 0){
        echo "Пользователь не найден";
        exit();
    }
    setcookie('id', $user['id'], time() + 3600, "/");
    setcookie('email', $user['email'], time() + 3600, "/");
    setcookie('user', $user['name'], time() + 3600, "/");
    setcookie('number', $user['number'], time() + 3600, "/");
    setcookie('city', $user['city'], time() + 3600, "/");
    
    $mysql->close();
    
    header('Location: / ')


?>