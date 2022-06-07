<?php
require ('./header-block.php');
require ('./header.php');
?>
    <section class="index-swiper">
      <div class="content__items items mySwiper">
        <div class="swiper-wrapper flex">
          <div class="index-swiper__item swiper-slide">
            <div class="index-swiper__img-wrapper">
              <picture
                ><img
                  src="./img/uploads/BRASL.png"
                  class="background__img"
                  alt="background"
              /></picture>
            </div>
            <div class="container">
              <div class="index-swiper__background">
              <h1 class="main__title index-swiper--title">
                Достопримечательности Витебской области
              </h1>
              </div>
            </div>
          </div>
          <div class="index-swiper__item swiper-slide">
            <div class="index-swiper__img-wrapper">
              <picture
                ><img
                  src="./img/uploads/attr.png"
                  class="background__img"
                  alt="background"
              /></picture>
            </div>
            <div class="container">
              <div class="index-swiper__background">
              <h1 class="main__title index-swiper--title">
                Поиск по всем достопримечательностям Витебской области
              </h1>
              </div>
            </div>
          </div>
          <div class="index-swiper__item swiper-slide">
            <div class="index-swiper__img-wrapper">
              <picture
                ><img
                  src="./img/uploads/1200px-Flag_of_Viciebsk,_Belarus.svg.png"
                  class="background__img"
                  alt="background"
              /></picture>
            </div>
            <div class="container">
              <div class="index-swiper__background">
              <h1 class="main__title index-swiper--title">
                Для предложения вашей статьи/достопримечательности авторизуйтесь
              </h1>
              </div>
            </div>
          </div>
        </div>
        <div class="next"></div>
        <div class="prev"></div>
        <div class="swiper-pagination"></div>
      </div>
    </section>
    <section class="index" data-barba="wrapper">
      <div class="container" data-barba="container" data-barba-namespace="i"></div>
    </section>
    <?
    require ('./preloader.php');
    require('./footer-block.php');
    ?>
    