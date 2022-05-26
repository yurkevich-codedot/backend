<?
require("php/scripts/connect.php");
$sql = mysqli_query($mysqli,"SELECT * FROM `news` ORDER BY `news`.`id` DESC LIMIT 4");
$news = mysqli_fetch_all($sql);

?>

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
              <? 
              foreach($news as $item)
              {
              echo'
            
                <a href="paragraph.php?id='.$item[0].'" class="footer__item"
                  >'.$item[1].'</a
                >';}
                ?>
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
