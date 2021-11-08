<?php
    setcookie('id', $user['id'], time() - 3600, "/");
    setcookie('user', $user['name'], time() - 3600, "/");
    setcookie('email', $user['email'], time() - 3600, "/");
    setcookie('number', $user['number'], time() - 3600, "/");
    setcookie('city', $user['city'], time() - 3600, "/");
    header('Location: /');
?>