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
                  src="./img/uploads/background.png"
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
                  src="./img/uploads/background.png"
                  class="background__img"
                  alt="background"
              /></picture>
            </div>
            <div class="container">
              <div class="index-swiper__background">
              <h1 class="main__title index-swiper--title">
               Слайд 2
              </h1>
              </div>
            </div>
          </div>
          <div class="index-swiper__item swiper-slide">
            <div class="index-swiper__img-wrapper">
              <picture
                ><img
                  src="./img/uploads/background.png"
                  class="background__img"
                  alt="background"
              /></picture>
            </div>
            <div class="container">
              <div class="index-swiper__background">
              <h1 class="main__title index-swiper--title">
                Слайд 3
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
    <?require('./footer-block.php')?>