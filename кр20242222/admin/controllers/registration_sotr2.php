<?php
session_start();
include './function/connect.php';
//проверка уникальности логина
$data = $connect->query(sprintf("SELECT `login` FROM `sotrydnik` WHERE `login` = '%s'",
$_POST['login']));
// передаем ошибку при совпадении логина
if($data->num_rows){
    header("Location: /registr/registration_sotr.php?message=Пользователь с таким логином уже Cуществует");
    exit;
    } else {
        //запись в базу данных о регистрации
        $sql = sprintf("INSERT INTO `sotrydnik`(`id_sotrydnik`, `surname`, `name`, `otchestvo`, `obrazovanie`,
        `login`, `password`, `role`, `id_dolzhnost`, `id_zayavka`) VALUES
        (NULL, '%s', '%s', '%s', '%s', '%s', '%s',  'Сотрудник', '%s', NULL)",
        $_POST['surname'],
        $_POST['name'],
        $_POST['otchestvo'],
        $_POST['obrazovanie'],
        $_POST['login'],
        $_POST['password'],
        $_POST['id_dolzhnost']
        );
        if($connect -> query($sql)){
        echo "Ошибка добавления данных";
        }
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['role'] = "Сотрудник";
        header("Location: /index_sotr.php");
        exit;
    }
?>