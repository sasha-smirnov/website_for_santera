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
    
    $mysql = new mysqli('localhost', 'varushka_users', 'TmVXX3i&', 'varushka_users');
    $mysql->query("INSERT INTO `users` (`email`, `name`, `number`, `city`, `password`)
    VALUES('$email', '$name', '$number', '$city', '$password')");
    $mysql->query("CREATE TABLE `$email` (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    description VARCHAR(50) NOT NULL,
    price VARCHAR(50) NOT NULL,
    date TIMESTAMP)");
    $mysql->close();
    
    header('Location: /sign-in.php')


?>