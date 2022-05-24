<?
require ('./header-block.php');
require ('./header.php');
$id = $_GET['id'];
$sql = mysqli_query($mysqli,"SELECT * FROM `attraction` WHERE `attraction`.`id`=$id");
$sql_view = mysqli_query($mysqli,"SELECT * FROM `attractioninfo` WHERE `attractioninfo`.`id`=$id");
$attractionsView = mysqli_fetch_all($sql_view);
$attractions = mysqli_fetch_all($sql);
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
            <a href="/dist/content.php" class="main__breadcrump"
              >Достопримечательности</a
            >
            <?  foreach ($attractions as $item)
            {
            echo '
            <a href="#" class="main__breadcrump">'.$item[1].'</a>
          </div>
          <div class="content__discription">
            <h1 class="main__title">'.$item[1].'</h1>
          </div>';
            }
          ?>
        </div>
      </div>
    </section>
    <section class="attraction">
      <div class="container">
        <div class="attraction__wrapper">
          <div
            class="attraction__items-wrapper attraction__items-wrapper--right"
          >
            <div class="attraction__item-content">
              <?
              foreach($attractionsView as $item)
              {
                echo '
              <p class="attraction__item-info">Категория:'.$item[3].'</p>
              <p class="attraction__item-info">Тип:'.$item[2].'</p>
              <div class="attraction__rating">
                <div class="attraction__rating-title">Оценить:</div>
                <div class="attraction__rating-simple">
                  <div class="attraction__rating-simple__items">
                    <input
                      type="radio"
                      class="attraction__rating-simple__item"
                      id="rating_5"
                      value="5"
                    />
                    <label
                      for="rating_5"
                      class="attraction__rating-simple__label"
                    ></label>
                    <input
                      type="radio"
                      class="attraction__rating-simple__item"
                      id="rating_4"
                      value="4"
                    />
                    <label
                      for="rating_4"
                      class="attraction__rating-simple__label"
                    ></label>
                    <input
                      type="radio"
                      class="attraction__rating-simple__item"
                      id="rating_3"
                      value="3"
                    />
                    <label
                      for="rating_3"
                      class="attraction__rating-simple__label"
                    ></label>
                    <input
                      type="radio"
                      class="attraction__rating-simple__item"
                      id="rating_2"
                      value="2"
                    />
                    <label
                      for="rating_2"
                      class="attraction__rating-simple__label"
                    ></label>
                    <input
                      type="radio"
                      class="attraction__rating-simple__item"
                      id="rating_1"
                      value="1"
                    />
                    <label
                      for="rating_1"
                      class="attraction__rating-simple__label"
                    ></label>
                  </div>
                </div>
              </div>
              <div class="attraction__item-discription">
              '.$item[8].'
              </div> ';             
            }
              ?>
            </div>
            <div class="main__img-container">
              <div class="main__img-wrapper">
                <picture class="main__img-inner"
                  ><img
                    src="./img/uploads/vitebsk.png"
                    class="main__img"
                    alt="lol"
                /></picture>
              </div>
              <div class="main__img-wrapper">
                <picture class="main__img-inner"
                  ><img
                    src="./img/uploads/vitebsk.png"
                    class="main__img"
                    alt="lol"
                /></picture>
              </div>
              <div class="main__img-wrapper">
                <picture class="main__img-inner"
                  ><img
                    src="./img/uploads/vitebsk.png"
                    class="main__img"
                    alt="lol"
                /></picture>
              </div>
            </div>
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
<?require('./footer-block.php')?>