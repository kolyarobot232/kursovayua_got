<?php
session_start();
if($_SESSION['role'] != "Администратор"){
header("Location: /profile/");
exit;
}
include "./inc/header.php";
include "./function/function.php";

?>
<style>
        .title234{
        width:400px;
        height: 80px;
        padding: 25px;
        font-size:20px;
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
    .text23{
        text-align:center;
        margin-top:25px;
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
    .button25555{
        display:flex;
        flex-direction:row; 
        justify-content: space-around;
        margin-right:auto;
        margin-left:auto;
        margin-top:15px;
        padding-top:5px;
    }
    .card255{
    padding: 20px;
    margin-top: 50px;
    width: 770px;
    background: white;
    text-align: center;
    box-shadow: 0px 2px 7px 0px #3cff3c;
    height: 220px;
    margin-left:auto;
    margin-right:auto;

    }
    body{
        background: url(/images/fon3.jpg);
    }
</style>
<section class="page">
    <div class="container p-3">

    <h1 class="text23 title234">Панель администратора</h1>


  
     <?php echo fnGetCardAdmin();?>  



    

    <?php include "/function/connect.php";
            
            if(isset($_GET['action'])){
            switch ($_GET['action']) {
            case 'success':
            $sql = sprintf("UPDATE `zayavka` SET `status`='%s' WHERE
            `id_zayavka` = '%s'", 'Подтвержден', $_GET['id']);
            $connect -> query($sql);
            header("Location: /admin/");
            exit;
            case 'cancel':
            $sql = sprintf("UPDATE `zayavka` SET `status`='%s' WHERE
            `id_zayavka` = '%s'", 'Отменен', $_GET['id']);
            $connect -> query($sql);
            header("Location: /admin/");
            exit;
            case 'delate':
            $sql = sprintf("DELETE FROM `zayavka` WHERE
            `id_zayavka` = '%s'", 'Удалён', $_GET['id']);
            $connect -> query($sql);
            header("Location: /admin/");
            exit;
            // case 'delatezayavkrf':
            // $sql = sprintf("DELETE FROM `zayavkra2` WHERE
            // `zayavkrf_id` = '%s'", $_GET['id']);
            // $connect -> query($sql);
            // header("Location: /admin/");
            // exit;
            }
            }
    
    ?>
    </div>
</section>
