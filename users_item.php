<?php
session_start();
include 'function.php';
$email =$_SESSION["user_email"];

if(is_not_logged_in()){
    $path = "page_login.php";
    redirect_to($path);
};

//я не знаю как сюда записать логику кроме как комментарием
//вставил функцию display_create_user_button_for_admin($email) в файл users.php на 52 строку

//получаю данные по всем пользователям.
$users = get_all_users();


function display_edit_for_admin($email){
    //если админ
    ?>

<? }