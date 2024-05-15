<?php
session_start();
include './function/connect.php';
//проверка уникальности логина
$data = $connect->query(sprintf("SELECT `login` FROM `klient` WHERE `login` = '%s'",
$_POST['login']));
// передаем ошибку при совпадении логина
if($data->num_rows){
    header("Location: /registr/registration.php?message=Ошибка регистации");
    exit;
    } else {
        //запись в базу данных о регистрации
        $sql = sprintf("INSERT INTO `klient`(`id_klient`, `surname`, `name`, `otchestvo`,
        `login`, `email`, `phone`, `password`, `role`) VALUES
        (NULL, '%s', '%s', '%s', '%s', '%s', '%s', '%s', 'Пользователь')",
        $_POST['surname'],
        $_POST['name'],
        $_POST['otchestvo'],
        $_POST['login'],
        $_POST['email'],
        $_POST['phone'],
        $_POST['password']
        );
        if($connect -> query($sql)){
        echo "Ошибка добавления данных";
        }
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['role'] = "Пользователь";
        header("Location: /index.php");
        exit;
    }
?>