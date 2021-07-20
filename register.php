<?php
session_start();
require 'function.php';


$email = $_POST["email"];
$password = $_POST["password"];

//var_dump($email);
//var_dump($password);
//die;

$user = get_user_by_email($email);

if(!empty($user)) {
    set_flash_message("danger", "Этот электронный адрес уже зарегистрирован.");
    redirect_to("page_register.php");
}


add_user($email,$password);

set_flash_message("success", "Регистрация прошла успешно.");
redirect_to("page_login.php");






