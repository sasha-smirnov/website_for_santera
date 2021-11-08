<?php
    $email = filter_var(trim($_POST['email']), 
    FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']), 
    FILTER_SANITIZE_STRING);
    $number = filter_var(trim($_POST['number']), 
    FILTER_SANITIZE_STRING);
    $city = filter_var(trim($_POST['city']), 
    FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']), 
    FILTER_SANITIZE_STRING);
    
    if(mb_strlen($email) < 5 || mb_strlen($email) > 90){
        echo "Недопустимая длина email";
        exit();
    } else if(mb_strlen($name) < 2 || mb_strlen($name) > 90){
        echo "Недопустимая длина имени";
        exit();
    } else if(mb_strlen($number) < 11 || mb_strlen($number) > 90){
        echo "Недопустимая длина номера телефона";
        exit();
    } else if(mb_strlen($city) < 1 || mb_strlen($city) > 90){
        echo "Введите город";
        exit();
    } else if(mb_strlen($password) < 2 || mb_strlen($password) > 90){
        echo "Недопустимая длина пароля";
        exit();
    }
    
    $password = md5($password."santerapass");
    $id = $_COOKIE['id'];
    
    $mysql = new mysqli('localhost', 'varushka_users', 'TmVXX3i&', 'varushka_users');
    $mysql->query("UPDATE `users` SET `email` = '$email', `name` = '$name', `number` = '$number',
    `city` = '$city', `password` = '$password' WHERE `id` = '$id'");
    
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
    
    header('Location: /info_user.php')
?>