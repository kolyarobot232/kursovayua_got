<?php
include "./function/connect.php";
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
`id_zayavka` = '%s'", $_GET['id']);
$connect -> query($sql);
header("Location: /admin/");
exit;
case 'delete':
$sql = sprintf("DELETE FROM `zayavka` WHERE
`id_zayavka` = '%s'", $_GET['id']);
$connect -> query($sql);
header("Location: /profile/profile.php");
exit;
// case 'delatezayavkrf':
//     $sql = sprintf("DELETE FROM `zayavkra2` WHERE
//     `zayavkrf_id` = '%s'", $_GET['id']);
//     $connect -> query($sql);
//     header("Location: /admin/");
//     exit;
}
}
?>