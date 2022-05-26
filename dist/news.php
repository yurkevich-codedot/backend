<?php
require ('./header-block.php');
require ('./header.php');

if(isset($_GET['page']))
{
  $page= $_GET['page'];
}
else
{
  $page = 1;
}
$cur_page_num = $_GET['page'];
$limit = 8;
$num = ($page * $limit)-$limit;
$res_count = mysqli_query($mysqli, "SELECT COUNT(*) FROM `news` ");
$row = mysqli_fetch_row($res_count);
$total = $row[0];
$str_page = ceil($total/$limit)+1; 
var_dump($str_page);
$sql = mysqli_query($mysqli, "SELECT * FROM `news` ORDER BY `news`.`id` DESC LIMIT $num OFFSET $limit");
?>
    <section class="background">
      <picture
        ><img
          src="./img/uploads/background.png"
          class="background__img"
          alt="background"
      /></picture>
      <div class="container">
        <div class="content__discription-wrapper">
          <div class="main__navigation">
            <a href="/dist/index.php" class="main__breadcrump">Главная</a>
            <a href="/dist/news.php" class="main__breadcrump"
              >Новости</a
            >
          </div>
          <div class="content__discription">
            <h1 class="main__title">Новости</h1>
          </div>
        </div>
      </div>
    </section>
    <section class="news">
      <div class="container">
        <div class="news__items-wrapper">
          <div class="news__items">
            <?
            $sql = mysqli_query($mysqli,"SELECT * FROM `news` ORDER BY `news`.`id` DESC LIMIT $num, $limit");
            $info = mysqli_fetch_all($sql);
            foreach($info as $item)
            {
              echo '
              <div class="news__item">
              <a href="/dist/paragraph.php?id='.$item[0].'" class="news__img-wrapper" title="'.$item[1].'"><img
                  src="./img/uploads/background.png"
                  class="news__img"
                  alt="'.$item[0].'"
              /></a>
              <div class="news__name-wrapper">
                <a href="/dist/paragraph.php?id='.$item[0].'" class="news__name" title="'.$item[1].'">'.$item[1].'</a>
                <div class="news__discription">
                  '.$item[2].'
                </div>
              </div>
              </div>';
            }
            ?>
          </div>
          <div class="news__pagination">
            <div class="news__pagination-btns">
              <?
              if($str_page==2)
              {
                echo '';
              }
              else
              {
                $totalpages = 0;
                if($cur_page_num!=1)
                {
                  echo '<a href="?page='. ($cur_page_num - 1) .'" class="news__page-num news__page-arrow">«</a>';
                }
                for($i = 1;$i<$str_page;$i++)
                {
                  if($cur_page_num==$i)
                  {
                    echo '<a href="/dist/news.php?page='.$cur_page_num.'" class="news__page-num-active">'.$cur_page_num.'</a>';
                  }
                  else
                  {
                    echo '<a href="/dist/news.php?page='.$i.'" class="news__page-num">'.$i.'</a>';
                  }
                  $totalpages = $i;
                }
                if($cur_page_num+1!=$str_page)
                {
                  echo '<a href="?page='. ($cur_page_num + 1) .'" class="news__page-num news__page-arrow"> »</a>';
                }
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?require('./footer-block.php')?>