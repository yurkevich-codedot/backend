<?php
require_once("connect.php");

$id = $_GET['id'];
$table = $_GET['table'];
if(mysqli_query($mysqli, "DELETE FROM `$table` WHERE `$table`.`id` = '$id'"))
{
    echo "<script>alert('Вы успешно удалили запись')</script>";
    echo "<script>window.location.href = '../pages/admin-panel.php';</script>";
}

?>