<?php
require_once('connect.php');

$name = $_POST['name'];
$category_id = $_POST['category_id'];
$address = $_POST['address'];
$locality_id = $_POST['locality_id'];
$date = $_POST['date'];

if(mysqli_query($mysqli, "INSERT INTO `attraction` ( `name` , `category_id` , `address` , `locality_id`, `date` , `rating` )
VALUES ('$name' , '$category_id' , '$address' , '$locality_id' , '$date' , 0)"))
{
    echo "<script>alert('Вы успешно добавили новую запись')</script>";
}
echo "<script>window.location.href = '../pages/admin-panel.php';</script>";


?>