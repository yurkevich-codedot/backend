<?
session_start();
require("connect.php");

$id = 0;
foreach ($_REQUEST as $key => $value) {
    if(intval($key) > 0)
    {
        $id = intval($key);
        break;
    } 
}
if($id > 0) { 
    mysqli_query($mysqli, "INSERT INTO rating VALUES (null, $id, ".$_SESSION['id'].", ".$_REQUEST['rating'].")");
    echo "<script>window.location.href = '../../attraction.php?id=$id'</script>";
}


?>