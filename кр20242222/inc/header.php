<?php
    $menu = "";
    if(isset($_SESSION['login'])){
        if($_SESSION['role'] == "Администратор"){
            $menu .= '<li class="menu-item">
                        <a class="menu-link" href="/admin/">Панель администратора</a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="/registr/registration_sotr.php">Регистрация сотрудника</a>
                    </li>';
        }
        else if($_SESSION['role'] == "Сотрудник"){
            $menu .='<li class="menu-item">
                        <a class="menu-link" href="/index_sotr.php">Профиль сотрудника</a>
                    </li>';
        }
        else if($_SESSION['role'] == "Пользователь"){
            $menu .='<li class="menu-item">
            <a class="menu-link" href="/profile/profile.php">Личный кабинет</a>
                    </li>
                    <li class="menu-item">
        <a class="menu-link" href="/nomera.php">Номера</a>
                </li>';
        }
        $menu .= '
                <li class="menu-item">
                    <a class="menu-link" href="/admin/controllers/logout.php">Выйти</a>
                </li>';
    }else{
        $menu = '<li class="menu-item">
        <a class="menu-link" href="/nomera.php">Номера</a>
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="/auth/auth.php">Вход</a>
                </li>
                <li class="menu-item">
                <a class="menu-link" href="/registr/registration.php">Регистрация</a>
                </li>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/index.css">
</head>
<body>
<header class="header">
        <div class="header-row">
            <div class="header-logo">
                <a href="/index.php" class="menu-link"><h1 class="logo-title">Отель Тихая Гавань</h1><a>
            </div>
            <div class="header-menu">
                <ul class="menu">
                    <?=$menu?>
                </ul>
            </div>
        </div>
    </header>
</body>
</html>