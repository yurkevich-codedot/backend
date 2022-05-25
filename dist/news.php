<?php
require ('./header-block.php');
require ('./header.php');
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
            $sql = mysqli_query($mysqli,"SELECT * FROM `news` ORDER BY `news`.`id` DESC");
            $info = mysqli_fetch_all($sql);
            foreach($info as $item)
            {
              echo '
              <div class="news__item">
              <a href="/dist/paragraph.php?id='.$item[0].'" class="news__img-wrapper" title="'.$item[1].'"><img
                  src="./img/uploads/knjaz-algerd.png"
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
            <a href="#" class="news__page-num news__page-arrow">«</a>
            <div class="news__pagination-btns">
              <a href="#" class="news__page-num">01</a>
              <a href="#" class="news__page-num">02</a>
              <a href="#" class="news__page-num">03</a>
              <a href="#" class="news__page-num">04</a>
              <a href="#" class="news__page-num">05</a>
            </div>
            <a href="#" class="news__page-num news__page-arrow">»</a>
          </div>
        </div>
      </div>
    </section>
    <?require('./footer-block.php')?>