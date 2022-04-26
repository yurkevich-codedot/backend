<?php
require_once("connect.php");

$id = $_GET['id'];

if(mysqli_query($mysqli, "DELETE FROM `attraction` WHERE `attraction`.`id` = '$id'"))
{
    echo "<script>alert('Вы успешно удалили запись')</script>";
    echo "<script>window.location.href = '../pages/admin-panel.php';</script>";
}




?>