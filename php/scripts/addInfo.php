<?php
require_once('connect.php');
$table = $_GET['table'];
$data_columns = mysqli_query($mysqli, 'SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_NAME`="' . $_GET['table'].'" ORDER BY ordinal_position');
$data_columns = mysqli_fetch_all($data_columns);

$sql = "INSERT INTO ".$_GET['table']." VALUES (NULL";
foreach($data_columns as $item){
    if($item[0]=='id')
    {
        continue;
    }
    if($item[0]=='role')
    {
        $isRole = true;
        continue;
    }
    echo $_POST[$item[0]] . "<br>";
    $sql.= "," . "'" . $_POST[$item[0]]. "'";
    
}
if($isRole)
{
    $sql.=",'user')";
}
else
{
    $sql.=")";
}


if(mysqli_query($mysqli, $sql))
{
    echo "<script>alert('Вы успешно добавили новую запись')</script>";
    echo "<script>window.location.href='../pages/admin-panel.php?table=".$_GET['table']."';</script>";
}

?>