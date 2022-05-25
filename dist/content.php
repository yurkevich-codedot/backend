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
            <a href="#" class="main__breadcrump"
              >Достопримечательности</a
            >
          </div>
          <div class="content__discription">
            <h1 class="main__title">Достопримечательности</h1>
          </div>
        </div>
      </div>
    </section>
    <section class="map">
      <div class="container">
        <div class="map__wrapper">
          <div class="map__title">Местонахождение на карте:</div>
          <div class="map__content" id="map"></div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="container">
        <div class="content__wrapper">
          <?
          $attractions = mysqli_query($mysqli,'SELECT * FROM `attractioninfo`');
          $categories = mysqli_query($mysqli,'SELECT * FROM `categories`');
          $info = mysqli_fetch_all($attractions);
          $titles = mysqli_fetch_all($categories);
          foreach($titles as $title)
          {
            echo '<div class="content__items swiper">
            <h1 class="main__title--padding-bottom">'.$title[1].'</h1>
            <div class="swiper-wrapper swiper-flex">
          ';
              foreach($info as $item)
              {
                  if($title[1]==$item[3])
                  {
                    $file = $_SERVER['DOCUMENT_ROOT']."/dist/img/uploads/attractions/$item[0]/main.png";
                    $file_exists = file_exists($file);
                    echo '
                      <div class="content__item swiper-slide">';
                      if($file_exists)
                      {
                        echo'
                          <div class="main__img-wrapper">
                            <img
                              src="./img/uploads/attractions/'.$item[0].'/main.png"
                              class="main__img"
                              alt="'.$item[0].'"
                            />
                          </div>
                          ';
                      }
                          echo'
                          <div class="content__name-wrapper">
                            <div class="content__name">'.$item[1].'</div>
                            <div class="content__name">'.$item[2].'</div>
                            <div class="content__name">'.$item[4].'</div>
                            <a href="/dist/attraction.php?id='.$item[0].'" class="content__btn" tabindex="-1"
                              >Подробнее</a
                            >
                          </div>
                          </div>';
                  }
                }
                echo'
                  <div class="swiper-pagination"></div>
                  <!--<div class="prev"></div>--!>
                  <!--<div class="next"></div>--!>
                  <div class="swiper-scrollbar"></div>
                  </div>
                ';
          }
          ?>
        </div>
   </div>
    </section>
    <?require('./footer-block.php')?>
