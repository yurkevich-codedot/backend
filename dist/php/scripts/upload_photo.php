<?php
session_start();
require("connect.php");
$sql = "";

function getfreeslot($path) {
    $ret = 0;
    while(file_exists($path."/$ret.png"))
        $ret++;
    return $ret;
}

if($_REQUEST['type'] == 'attractions') {
    $name = $_REQUEST["item_article"];
    $category_id = $_REQUEST["item_category"];
    $address = $_REQUEST["address"];
    $locality_id = $_REQUEST["item_locality"];
    $date = "Now()";
    $coordinates = $_REQUEST["coordinates"];
    $types_id = $_REQUEST["item_type"];
    $is_suggest = ($_REQUEST['method'] == 'add') ? 0 :  
    (isset($_REQUEST['suggest']) ? 1 : 0 );
    $discription = $_REQUEST["item_description"];

    if($_SESSION['role']=='admin')
    {
        $is_suggest = 0;
    }

    $sql = "INSERT INTO attraction VALUES (null,'$name',  $category_id, '$address', $locality_id, $date, '$coordinates', $types_id, $is_suggest, '$discription')";

    
    if($_REQUEST['method'] == 'edit' ) {
        
        if(isset($_REQUEST['deleting']) && count($_REQUEST['deleting']) > 0)
            foreach ($_REQUEST['deleting'] as $key => $value) {
                $uploads_dir = $_SERVER['DOCUMENT_ROOT']."/dist/img/uploads/".$_REQUEST['type'] ."/".$_REQUEST['id']."/{$value}.png";
                unlink($uploads_dir);
            }
        $sql = "update attraction set name='$name', category_id=$category_id, address='$address', locality_id=$locality_id, date=$date, coordinates='$coordinates', types_id=$types_id, is_suggest=$is_suggest, discription='$discription'
        where id=".$_REQUEST['id'];        
    }
    
}
else if($_REQUEST['type'] == 'news') {
    $name = $_REQUEST["item_article"];
    $discription = $_REQUEST["item_description"];
    $date = "Now()";
    $user_id = $_SESSION['id'];
    $is_suggest =  ($_REQUEST['method'] == 'add') ? 1 :  
    (isset($_REQUEST['suggest']) ? 0 : 1 );

    if($_SESSION['role']=='admin')
    {
        $is_suggest = 0;
    }

    $sql = "INSERT INTO news VALUES (null, '$name',  '$discription', $date, $user_id, $is_suggest)";

    if($_REQUEST['method'] == 'edit' ) {
        
        if(isset($_REQUEST['deleting']) && count($_REQUEST['deleting']) > 0)
            foreach ($_REQUEST['deleting'] as $key => $value) {
                $uploads_dir = $_SERVER['DOCUMENT_ROOT']."/dist/img/uploads/".$_REQUEST['type'] ."/".$_REQUEST['id']."/{$value}.png";
                unlink($uploads_dir);
            }
        $sql = "update news set name='$name', discription='$discription', date=$date, user_id='$user_id', is_suggest=$is_suggest where id=".$_REQUEST['id'];
    }
}
else die("unk type");
mysqli_query($mysqli, $sql);

$inserted_id = $_REQUEST['method'] != 'edit' ? mysqli_insert_id($mysqli) : intval($_REQUEST['id']);

if($inserted_id > 0 && isset($_FILES["files"]) && count($_FILES["files"]) > 0  ) { 
    $uploads_dir = $_SERVER['DOCUMENT_ROOT']."/dist/img/uploads/".$_REQUEST['type'] ."/".$inserted_id;
    if (is_dir($uploads_dir) || mkdir($uploads_dir, 0777, true)) {
        foreach ($_FILES["files"]["error"] as $key => $error) {
            if ($error == UPLOAD_ERR_OK) {
                $tmp_name = $_FILES["files"]["tmp_name"][$key];
                move_uploaded_file($tmp_name, "$uploads_dir/".getfreeslot($uploads_dir).".png");
            }
        }
    }
    else 
        die('Не удалось создать директории...');
}
echo $inserted_id;



?>