<?php
    session_start();
    if(!isset($_SESSION['login'])){
        header("Location: auth.php");
        exit;
        }
    include "inc/header.php";
    include "function/function.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личынй кабинет</title>
    <link rel="stylesheet" href="style/index.css">
</head>
<body>
<section class="">
    <div class="title234">
        <h1 class="text25">Личный кабинет сотрудника</h1>
        </div>
        <?php
            echo fnGetProfile2($_SESSION['login']);

        ?>
        <form method="POST">
        <label for="id_zayavka" class="form-label fs-5">Выберите номер заявки:</label>
        <select class="vvod vvod23" name="nomer">
        <?php
        $sql= "SELECT id_zayavka FROM zayavka";
        $result = $connect->query($sql);
        $data = "";
        while($row = $result->fetch_assoc()){
        $data .=sprintf("<option value='%s'>%s</option>",$row['id_zayavka'],$row['id_zayavka']);
        }
        echo $data;
         ?>
        </select>
        <input type="submit" name="send" value="Поиск" class="pos pos2"> 
        </form>
        <?php
        echo fnGetCardProfile2($_SESSION['login'], $nomer);
        ?>
</section>
        
</body>
<style>
        .vvod{
        width: 50px;
        font-size:15px;
        height: 25px;
        margin-bottom: 5px;
        }
        .pos{
        margin: 5px;
        font-size: 21px; 
    }
    .pos2{
        width:250px;
        background: SeaGreen;
        font-family:Raleway;
        color:white;
        text-align: center;
        vertical-align: middle;
        cursor: pointer;
        border: 1px solid #bdbdbd;
        padding: .375rem .75rem;

        border-radius: .25rem;
        
    }
    .button255{
       padding-top:5px;
    }
    .title234{
        width:400px;
        height: 120px;
        padding: 25px;
        font-size:15px;
        color: white;
        text-align:start;
        margin-top:20px;
        margin-left:auto;
        margin-right:auto;
        background-color: #00AB76;
        border-radius: 20px 20px 20px 20px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        box-sizing: border-box;
        border: 2px solid black;
    }
    .text25{
        text-align:center;
        
    }
    body{
        background: url(/images/fon3.jpg);
    }
    .okno23{

    margin-left:auto;
    margin-right:auto;
    }
    .okno{
    text-align:center;
    border: 5px solid lime;
    width: 450px;
    height: 180px;
    padding: 50px;  
    margin-top: 25px;

    background-color:#00AB76;
    }
    .card255{
    padding: 20px;
    margin-top: 50px;
    display: flex;
    flex-direction: column;
    justify-content:space-around;
    width: 450px;
    background: white;
    text-align: center;
    box-shadow: 0px 2px 7px 0px #3cff3c;
    height: 120px;

    }
    .card255:hover{
    box-shadow: 0px 10px 30px 0px #3cff3c;
    }
</style>

</html>