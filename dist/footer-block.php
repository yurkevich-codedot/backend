<?
require("php/scripts/connect.php");
$sqlNews = mysqli_query($mysqli,"SELECT * FROM `news` ORDER BY `news`.`id` DESC LIMIT 4");
$sqlLocality = mysqli_query($mysqli,"SELECT * FROM `locality` ORDER BY RAND() LIMIT 4");
$sqlAttraction = mysqli_query($mysqli,"SELECT * FROM `attraction` ORDER BY RAND() LIMIT 4");


$news = mysqli_fetch_all($sqlNews);
$locality = mysqli_fetch_all($sqlLocality);
$attarction = mysqli_fetch_all($sqlAttraction);

?>

<footer class="footer">
      <div class="container">
        <div class="footer__wrapper">
          <div class="footer__wrapper-inner">
            <div class="footer__title">
              Достопримечательности Витебской области
            </div>
          </div>
          <div class="footer__wrapper-inner">
          <div class="footer__list-wrapper">
            <a href="content.php" class="footer__list-title">Достопримечательности</a>
              <div class="footer__items">
              <? 
              foreach($attarction as $item)
              {
              echo'
            
                <a href="attraction.php?id='.$item[0].'" class="footer__item"
                  >'.$item[1].'</a
                >';}
                ?>
              </div>
            </div>
            <div class="footer__list-wrapper">
            <a href="news.php?page=1" class="footer__list-title">Новости</a>
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
                <?
                foreach($locality as $item) 
                echo'
                <a href="#" class="footer__item">'.$item[1].'</a>';
                ?>
              </div>
            </div>
          </div>
          <div class="footer__wrapper-inner footer__wrapper-inner--license">
            <div class="footer__copyright">© Все права защищены автором</div>
            <div class="footer__links-wrapper">
              <div class="footer__links">
              </div>
            </div>
            <div class="footer__copyright-date">2022</div>
          </div>
        </div>
      </div>
    </footer>
      <script src="./js/preloader.js">

      </script>
    <script src="./js/main.min.js"></script>
  </body>
</html>
