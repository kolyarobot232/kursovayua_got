<?php
    session_start();

    include './function/connect.php';
    $sql = sprintf("SELECT * FROM `klient` WHERE `login` = '%s' AND `password` = '%s'",
                    $_POST['login'], $_POST['password']);
    $sql2 = sprintf("SELECT * FROM `sotrydnik` WHERE `login` = '%s' AND `password` = '%s'",
                    $_POST['login'], $_POST['password']);

    $result = $connect->query($sql);
    $result2 = $connect->query($sql2);

    if($result->num_rows){

        $row = $result->fetch_assoc();
        $_SESSION['login'] = $row['login'];
        $_SESSION['role'] = $row['role'];
        header("Location: /index.php");
        exit;
    }
    else if($result2->num_rows){

        $row = $result2->fetch_assoc();
        $_SESSION['login'] = $row['login'];
        $_SESSION['role'] = $row['role'];
        header("Location: /index_sotr.php");
        exit;
    }
    else{
        header("Location: /auth/auth.php?message=Некорректный логин или пароль");
        exit;
    }
?>