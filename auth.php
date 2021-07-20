<?php
session_start();
require 'function.php';

//получить данные из формы на странице page_login.php
$email = $_POST["email"];
$password = $_POST["password"];


// если пароли совпадают, то
if (login($email, $password)) {

//записать email и id пользователя в сессию
    set_user_in_session_by_email($email);

// перенаправить на страницу "пользователи"
    $path = "users.php";
} else {
// если пароли не совпадают, то вернуть на страницу авторизации, показав сообщение
    set_flash_message("danger","Логин или пароль не совпадают.");
    $path = "page_login.php";
}
redirect_to($path);


