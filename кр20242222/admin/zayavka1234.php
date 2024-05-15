<?php
session_start();
include './function/connect.php';
$select = sprintf("SELECT `id_klient` FROM `klient` WHERE `login` = '%s'", $_SESSION['login']);
// $select2 = sprintf("SELECT `id_nomer` FROM `nomer` WHERE `login` = '%s'", $_SESSION['login']);
$select_result = $connect->query($select);
// $select_result2 = $connect->query($select2);

$select_row = $select_result->fetch_assoc();
// $select_row2 = $select_result2->fetch_assoc();


$id_klient = $select_row['id_klient'];
// $id_nomer = $select_row2['id_nomer'];


$sql = sprintf("INSERT INTO `zayavka`(`id_zayavka`, `zaezd`, `viezd`, `status`,`id_klient`, `id_nomer`) VALUES (NULL,'%s', '%s', '%s', '%s','%s')",
$_POST['zaezd'], $_POST['viezd'], "Новый", $id_klient, $_POST['id_nomer']);
$connect->query($sql);
header("Location: /profile/profile.php");
exit;
?>