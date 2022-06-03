<?php
session_start();
require("connect.php");
$sql = "";
if($_REQUEST['type'] == 'attractions') {
    $name = $_REQUEST["item_article"];
    $category_id = $_REQUEST["item_category"];
    $address = "asd";
    $locality_id = $_REQUEST["item_locality"];
    $date = "Now()";
    $coordinates = $_REQUEST["coordinates"];
    $types_id = $_REQUEST["item_type"];
    $is_suggest = 1;
    $discription = $_REQUEST["item_description"];

    $sql = "INSERT INTO attraction VALUES (null,'$name',  $category_id, '$address', $locality_id, $date, '$coordinates', $types_id, $is_suggest, '$discription')";
    
}
else if($_REQUEST['type'] == 'news') {
    $name = $_REQUEST["item_article"];
    $discription = $_REQUEST["item_description"];
    $date = "Now()";
    $user_id = $_SESSION['id'];
    $is_suggest = 1;

    $sql = "INSERT INTO news VALUES (null, '$name',  '$discription', $date, $user_id, $is_suggest)";
}
else die("unk type");
mysqli_query($mysqli, $sql);

$inserted_id = mysqli_insert_id($mysqli);

if($inserted_id > 0) {
    $uploads_dir = $_SERVER['DOCUMENT_ROOT']."/dist/img/uploads/".$_REQUEST['type'] ."/".$inserted_id;
    if (mkdir($uploads_dir, 0777, true)) {
        foreach ($_FILES["files"]["error"] as $key => $error) {
            if ($error == UPLOAD_ERR_OK) {
                $tmp_name = $_FILES["files"]["tmp_name"][$key];
                move_uploaded_file($tmp_name, "$uploads_dir/$key.png");
            }
        }
    }
    else 
        die('Не удалось создать директории...');
}
echo $inserted_id;



?>