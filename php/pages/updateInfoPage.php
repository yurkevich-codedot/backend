<?
session_start();
require("../scripts/connect.php");
$table = $_GET['table'];
$id = $_GET['id'];
$data_columns = mysqli_query($mysqli, 'SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_NAME`="' . $_GET['table'].'" ORDER BY ordinal_position');
$array_locality = mysqli_query($mysqli,'SELECT * FROM `locality`');
$localitys = array();
$array_categories = mysqli_query($mysqli,'SELECT * FROM `categories`');
$categories = array();
while($locality_list = mysqli_fetch_assoc($array_locality))
{
  $localitys[] = $locality_list;
}

while($categories_list = mysqli_fetch_assoc($array_categories))
{
  $categories[] = $categories_list;
}

$data = mysqli_query($mysqli, 'SELECT * FROM '.$_GET['table'].'');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css" />
    <link rel="icon" href="../icon/favicon.ico" type="image/x-icon"/>
    <title>Update | <?echo $_GET['table']?></title>
</head>
<body>
<section class="login">
  <div class="container">
    <div class="background"></div>
    <div class="login__wrapper">
      <div class="login__form">
        <div class="login__header">
          <h1 class="login__title">Редактирование данных в <?echo $table;?></h1>
          <div class="login__discription">Отредактируйте данные в соответствующих текстовых поля</div>
        </div>
        <form action="../scripts/updateInfo.php?table=<?echo $table;?>" method="post"> 
            <div class="login__input-wrapper">
            <div class="login__input-wrapper-inner">
                <?
                $data_columns = mysqli_fetch_all($data_columns);
                $i=1;
                foreach($data_columns as $item){
                  if($item[0]=='id')
                  {
                    echo '<div class="login__input-name" style="display:none">'.$item[0].'</div>
                    <input type="hidden" class="login__input" name="'.$item[0].'" value="'.$id.'" readonly/>';
                  }
                  if($item[0]=='id')
                  {
                    continue;
                  }
                  if($item[0]=='category_id')
                  {
                    echo '<div class="login__input-name">'.$item[0].'</div>
                    <select class="login__input" name="'.$item[0].'">';
                    foreach ($categories as $category)
                    {
                      echo '<option value="'.$category['id'].'">'.$category['name'].'</option>';
                    }
                    echo '</select>';                   
                  }
                  else if($item[0]=='locality_id')
                  {
                    echo '<div class="login__input-name">'.$item[0].'</div>';
                    echo '<select class="login__input" name="'.$item[0].'" >';
                    foreach ($localitys as $locality)
                    {
                      echo '<option value="'.$locality['id'].'">'.$locality['name'].'</option>';
                    }
                    echo '</select>';                   
                  }
                  else{
                    echo '<div class="login__input-name">'.$item[0].'</div>
                    <input class="login__input" name="'.$item[0].'" value="'.$cur_data[0].'" placeholder="'.$item[0].'"/>';
                  }
                }
                ?>
              </div>
            <div class="login__input-wrapper-inner">
                <button class="btn">
                <a href="../scripts/addInfo.php">
                    <span class="btn-text">Редактировать</span>
                </a>
                </button>
            </div>
            </div>
        </form>
        <div class="login__footer">
          <a href="../pages/admin-panel.php?table="<?echo $_GET['title']?>" class="login__footer-link">Выход</a>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>