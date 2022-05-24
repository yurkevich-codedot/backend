<header class="header" id="myHeader">
    <div class="header__wrapper">
        <a href="/dist/index.php" class="header__title">Достопримечательности Витебской области</a>
        <input type="checkbox" id="menu" />
        <label class="menu" for="menu">
            <div class="header__menu-btn">
                <div class="header__menu-icon"></div>
            </div>
        </label>
        <label class="backdrop" for="menu"></label>
        <nav class="header__nav-wrapper">
          <div class="header__cross-wrapper">
            <label for="menu"><div class="header__cross"></div></label>
          </div>
           <a href="/dist/profile-user.php" class="header__item header__user"
            ><?echo $_SESSION['email']?></a
          >
          <div class="header__nav-wrapper-list">
            <div class="header__nav-list">
              <a href="/dist/index.php" class="header__item header__item--active"
                >Главная</a
              >
              <a href="/dist/news.php" class="header__item">Новости</a>
              <a href="/dist/content.php" class="header__item"
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
            <?
            if(!isset($_SESSION['email']))
            {
              echo '  <a href="./php/pages/loginPage.php" class="header__btn-sign"
              >Войти</a
            >';
            }
            ?>
          </div>
        </nav>
      </div>
</header>
