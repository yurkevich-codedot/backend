<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>
</body>
</html>

<?php
require_once("connect.php");

$id = $_GET['id'];
$table = $_GET['table'];
if(mysqli_query($mysqli, "DELETE FROM `$table` WHERE `$table`.`id` = '$id'"))
{
    echo "<script>alert('Вы успешно удалили запись')</script>";
    echo "<script>window.location.href='../pages/admin-panel.php?table=".$_GET['table']."';</script>";
}
?>