<?php
include 'functions.php';

$username = $_POST['login'] ?? null;
$password = $_POST['password'] ?? null;


if (null !== $username || null !== $password) {

    // Если пароль из базы совпадает с паролем из формы
    if (checkPassword($username, $password))  
    {
        // Стартуем сессию:
        session_start(); 
        
   	 // Пишем в сессию информацию о том, что мы авторизовались:
        $_SESSION['auth'] = true; 
        
        // Пишем в сессию логин и id пользователя
        $_SESSION['id'] = getUsersList()[$username]['id']; 
        $_SESSION['login'] = $username; 

    }
}

$auth = $_SESSION['auth'] ?? null;

if ($auth) {
    header('Location: main.php');
    
}

else {
   echo "Привет, гость! Для входа в личный кабинет введи верные логин или пароль!";
}
