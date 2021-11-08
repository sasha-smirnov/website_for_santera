<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $text = $_POST['question'];

	$to = "alexandersmirnov2004@gmail.com"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $email;
	$subject = "Заявка c сайта";

	
	$msg="
    Имя: $name \n
    Email: $email \n
    Текст: $text"; 	
	mail($to, $subject, $msg, "From: $to ");

?>

<p>Привет, форма отправлена</p>