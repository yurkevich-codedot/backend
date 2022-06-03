<?php
session_start();
require("connect.php");
$result = mysqli_query($mysqli, "update usersdost set `password`='".$_REQUEST['password']."' where id=".$_REQUEST['id'] );
$row_cnt = mysqli_affected_rows($mysqli);
$_SESSION['password'] = $_REQUEST['password'];
echo  $row_cnt;
?>