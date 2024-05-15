<?php
    session_start();
    if(!isset($_SESSION['login'])){
    header("Location: /auth/auth.php");
    exit;
    }
    include './inc/header.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Бронирование</title>
    <link rel="stylesheet" href="/style/index.css">
</head>
<body>
<div class="zayavka">
        <h1 class="text2355">Бронирование номера</h1>
        <form action="/admin/zayavka1234.php" method="post"
                class="" novalidate>
                <div class="mb-3">
                    <?php
                    if(!isset($_POST['tip_komnata'])){

                        echo '<select class="vvod vvod23" name="id_nomer">
                        <option value="1">Бюджет</option>
                        <option value="2">Комфорт</option>
                        <option value="3">Классический</option>
                        </select>';
                    
                    }
                    else{
                        if($_POST['tip_komnata']=='1')
                        {
                            echo '<select class="vvod vvod23" name="id_nomer">
                            <option value="1" selected>Бюджет</option>
                            <option value="2">Комфорт</option>
                            <option value="3">Классический</option>
                            </select>';
                        }
                        else if($_POST['tip_komnata']=='2')
                        {
                            echo '<select class="vvod vvod23" name="id_nomer">
                            <option value="1">Бюджет</option>
                            <option value="2" selected>Комфорт</option>
                            <option value="3">Классический</option>
                            </select>';
                        }
                        else if($_POST['tip_komnata']=='3')
                        {
                            echo '<select class="vvod vvod23" name="id_nomer">
                            <option value="1">Бюджет</option>
                            <option value="2">Комфорт</option>
                            <option value="3" selected>Классический</option>
                            </select>';
                        }
                    }
                    ?>
                </div>
            <div class="mb-3">
                <label for="zaezd" class="">Заезд<br></label>
                <input type="date" min="2024-05-10" class="vvod" id="zaezd" name="zaezd" required>
            </div>
            <div class="mb-3">
                <label for="viezd" class="">Выезд<br></label>
                <input type="date" min="2024-05-10" class="vvod" id="viezd" name="viezd" required>
            </div>
            <input type="submit" class="card-button button23" value="Забронировать">
        </form>
    </div>
</body>
<style>
    .vvod23{
        text-align:center;
        font-size: 15px;
    }
    .text2355{
        margin-bottom:25px;
    }
        .zayavka{
        text-align:center;
        border: 5px solid lime;
        width: 500px;
        height: auto;
        padding: 50px;
        margin-top: 50px;
        margin-left: 600px;
        background-color:#00AB76;
        margin-bottom:100px;
        }
    body{
    background: url(/images/fon.jpg);
    width: 100%;
    height: 1000px;
    margin-top: 0px;
    padding-top:0px;
    }
        .vvod{
            width:400px;
        height: 25px;
        margin-bottom: 15px;
        
        }
        .text233{
            margin-top:0px;
        }
</style>
</html>