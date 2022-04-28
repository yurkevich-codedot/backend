<?php
require_once('connect.php');
$table = $_GET['table'];
$data_columns = mysqli_query($mysqli, 'SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_NAME`="' . $_GET['table'].'" ORDER BY ordinal_position');
$data_columns = mysqli_fetch_all($data_columns);
$data = mysqli_query($mysqli, 'SELECT * FROM '.$_GET['table'].'');
$sql="UPDATE ".$_GET['table']." SET ";
$selectTable = $_REQUEST['table'];
unset($_REQUEST['table']);
foreach($_REQUEST as $key => $value)
{
    echo $_POST[$item[0]] . "<br>";
    $sql.= "$key= '$value'" . ",";
}
$sql[strlen($sql)-1] = ' ';
$sql.=" WHERE `id` = '".$_POST['id']."'";

echo $sql;

if(mysqli_query($mysqli, $sql))
{
    echo "<script>alert('Вы успешно обновили запись')</script>";
    echo "<script>window.location.href='../pages/admin-panel.php?table=".$_GET['table']."';</script>";
}

?>