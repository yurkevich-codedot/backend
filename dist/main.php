<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=5,minimum-scale=1"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Index</title>
    <link rel="stylesheet" href="css/main.min.css" />
    <link rel="shortcut icon" href="favicon/favicon.ico" />
  </head>
  <body>
    <header class="header" id="myHeader">
      <div class="header__wrapper">
        <a href="main.html" class="header__title"
          >Достопримечательности Витебской области</a
        >
        <input type="checkbox" id="menu" />
        <label class="menu" for="menu"
          ><div class="header__menu-btn">
            <div class="header__menu-icon"></div></div
        ></label>
        <label class="backdrop" for="menu"></label>
        <nav class="header__nav-wrapper">
          <div class="header__cross-wrapper">
            <label for="menu"><div class="header__cross"></div></label>
          </div>
          <a href="profile-user.html" class="header__item header__user"></a>
          <div class="header__nav-wrapper-list">
            <div class="header__nav-list">
              <a href="main.html" class="header__item header__item--active"
                >Главная</a
              >
              <a href="news.html" class="header__item">Новости</a>
              <a href="content.html" class="header__item"
                >Достопримечательности</a
              >
              <div class="main__search-wrapper">
                <input
                  class="main__search-fild"
                  id="searchHeader"
                  name="search_bar"
                  placeholder="Поиск..."
                />
                <button class="main__search-icon" name="search">
                  <svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle
                      cx="11"
                      cy="11"
                      r="7"
                      stroke="black"
                      stroke-width="2"
                    />
                    <path
                      d="M20 20L17 17"
                      stroke="black"
                      stroke-width="2"
                      stroke-linecap="round"
                    />
                  </svg>
                </button>
              </div>
            </div>
            <a href="../php/pages/loginPage.php" class="header__btn-sign"
              >Войти</a
            >
          </div>
        </nav>
      </div>
    </header>
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
              <h1 class="main__title index-swiper--title">
                Достопримечательности Витебской области
              </h1>
            </div>
          </div>
          <div class="index-swiper__item swiper-slide">
            <div class="index-swiper__img-wrapper">
              <picture
                ><img
                  src="./img/uploads/vitebsk.png"
                  class="background__img"
                  alt="background"
              /></picture>
            </div>
            <div class="container">
              <h1 class="main__title index-swiper--title">Тест</h1>
            </div>
          </div>
          <div class="index-swiper__item swiper-slide">
            <div class="index-swiper__img-wrapper">
              <picture
                ><img
                  src="./img/uploads/knjaz-algerd.png"
                  class="background__img"
                  alt="background"
              /></picture>
            </div>
            <div class="container">
              <h1 class="main__title index-swiper--title">Князь Алгердддд</h1>
            </div>
          </div>
        </div>
        <div class="next"></div>
        <div class="prev"></div>
        <div class="swiper-pagination"></div>
      </div>
    </section>
    <section class="main"><div class="container"></div></section>
    <footer class="footer">
      <div class="container">
        <div class="footer__wrapper">
          <div class="footer__wrapper-inner">
            <div class="footer__title">
              Достопримечательности Витебской области
            </div>
            <div class="main__search-wrapper">
              <input
                class="main__search-fild"
                id="searchFooter"
                name="search_bar"
                placeholder="Поиск..."
              />
              <button class="main__search-icon" name="search">
                <svg
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <circle
                    cx="11"
                    cy="11"
                    r="7"
                    stroke="black"
                    stroke-width="2"
                  />
                  <path
                    d="M20 20L17 17"
                    stroke="black"
                    stroke-width="2"
                    stroke-linecap="round"
                  />
                </svg>
              </button>
            </div>
          </div>
          <div class="footer__wrapper-inner">
            <div class="footer__list-wrapper">
              <a href="content.html" class="footer__list-title"
                >Достопримечательности</a
              >
              <div class="footer__items">
                <a href="attraction.html" class="footer__item">Три штыка</a>
                <a href="attraction.html" class="footer__item"
                  >Памятник Князю Альгерду</a
                >
                <a href="attraction.html" class="footer__item"
                  >Памятник Воинам-интернационалистам</a
                >
                <a href="attraction.html" class="footer__item">Три штыка</a>
              </div>
            </div>
            <div class="footer__list-wrapper">
              <a href="#" class="footer__list-title">Категории</a>
              <div class="footer__items">
                <a href="#" class="footer__item">Памятники</a>
                <a href="#" class="footer__item">Исторический объект</a>
                <a href="#" class="footer__item">Культурный объект</a>
              </div>
            </div>
            <div class="footer__list-wrapper">
              <a href="news.html" class="footer__list-title">Новости</a>
              <div class="footer__items">
                <a href="paragraph.html" class="footer__item"
                  >Чернобыльская зона: осколки памяти</a
                >
                <a href="paragraph.html" class="footer__item"
                  >"Синий" дом снова синий</a
                >
                <a href="paragraph.html" class="footer__item"
                  >Супер крутая и полезная статья</a
                >
              </div>
            </div>
            <div class="footer__list-wrapper">
              <a href="#" class="footer__list-title">Населенный пункт</a>
              <div class="footer__items">
                <a href="#" class="footer__item">Витебск</a>
                <a href="#" class="footer__item">Толочин</a>
                <a href="#" class="footer__item">Сенно</a>
                <a href="#" class="footer__item">Ушачи</a>
              </div>
            </div>
          </div>
          <div class="footer__wrapper-inner footer__wrapper-inner--license">
            <div class="footer__copyright">© Все права защищены автором</div>
            <div class="footer__copyright-date">2022</div>
          </div>
        </div>
      </div>
    </footer>
    <script src="./js/main.min.js"></script>
  </body>
</html>
