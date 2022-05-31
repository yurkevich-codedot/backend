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
      <?
       $file = $_SERVER['DOCUMENT_ROOT']."/dist/img/uploads/attractions/$id/main.png";
       $file_exists = file_exists($file);
       if($file_exists)
       {
      echo '
      <picture
        ><img
          src="./img/uploads/attractions/'.$id.'/main.png"
          class="background__img"
          alt="background"
      /></picture>';}
      else
      {
        echo '<picture
        ><img
          src="./img/uploads/background.png"
          class="background__img"
          alt="background"
      /></picture>';
      }
      ?>
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
            foreach ($attractionsView as $item)
            {
            echo '
            <div class="attraction__info">
            <p class="attraction__item-info">Категория: '.$item[3].'</p>
            <p class="attraction__item-info">Тип: '.$item[2].'</p>
            <p class="attraction__item-info">Адрес: '.$item[4].'</p>
            </div>
            <div class="rating rating_set">
            <div class="rating__body">
            <div class="rating__active"></div>
              <div class="rating__items">
                <input type="radio" class="rating__item" name="rating" id="1" value="1">
                <input type="radio" class="rating__item" name="rating" id="2" value="2">
                <input type="radio" class="rating__item" name="rating" id="3" value="3">
                <input type="radio" class="rating__item" name="rating" id="4" value="4">
                <input type="radio" class="rating__item" name="rating" id="5" value="5">
              </div>
            </div>
            <div class="rating__value">'.$item[9].'</div>
          </div>'
            ;
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
              
              <div class="attraction__item-discription">
              <pre>'.$item[8].'<pre>
              </div> ';             
            }
              ?>
            </div>
  
            <div class="main__img-container infoswiper">
            <div class="swiper-wrapper swiper-flex">
              <?
              $counter = 1;
              do
              {
                $file = $_SERVER['DOCUMENT_ROOT']."/dist/img/uploads/attractions/$id/$counter.png";
                $file_exists = file_exists($file);
                if($file_exists)
                {
                  echo '
                  <div class="content__item swiper-slide">
                  <div class="main__img-wrapper">
                    <picture class="main__img-inner"
                      ><img
                        src="./img/uploads/attractions/'.$id.'/'.$counter.'.png"
                        class="main__img"
                        alt="lol"
                    /></picture>
                  </div>
                  </div>'
                  ;
                  $counter++;
                }
              }
              while($file_exists);
              ?>
            </div>
            <div class="swiper-pagination"></div>
              <div class="prev"></div>
              <div class="next"></div>
              <div class="swiper-scrollbar"></div>
        </div>
        </div>
      </div>
      <!-- </div> -->
    </section>
    <section class="map">
      <div class="container">
        <div class="map__wrapper">
          <div class="map__title">Местонахождение на карте:</div>
          <div class="map__content" id="map"></div>
        </div>
      </div>
    </section>
    <script>
      const ratings = document.querySelectorAll(".rating");
      if (ratings.length > 0) {
        initRatings();
      }

      function initRatings() {
        let ratingActive;
        let ratingValue;
        for (let i = 0; i < ratings.length; i++) {
          const rating = ratings[i];
      
          initRating(rating);
        }


    function initRating(rating) {
      initRatingVars(rating);

      setRatingActiveWidth();

      if (rating.classList.contains('rating_set')){
        setRating(rating);
        console.log(2);
      }
    }

    function initRatingVars(rating) {
      ratingActive = rating.querySelector(".rating__active");
      ratingValue = rating.querySelector(".rating__value");
    }

  function setRatingActiveWidth(i = ratingValue.innerHTML) {
    const ratingActiveWidth = i / 0.05;
    ratingActive.style.width = `${ratingActiveWidth}%`;
  }

  function setRating(rating)
  {

    const ratingItems = rating.querySelectorAll(".rating__item");
    for (let i = 0; i < ratingItems.length; i++) {
    const ratingItem = ratingItems[i];

    ratingItem.addEventListener("mouseenter", function (e){
        initRatingVars(rating);

        console.log(ratingItem.value);
        setRatingActiveWidth(ratingItem.value);
      });
      ratingItem.addEventListener("mouseleave", function(e){
        setRatingActiveWidth();
      });
      ratingItem.addEventListener("click", function(e){
        initRatingVars(rating);

        if(rating.dataset.ajax)
        {
          setRatingValue(ratingItem.value, rating);
        }
        else
        {
          ratingValue.innerHTML = i + 1;
          setRatingActiveWidth();
        }
      });
    }
  }
}

    </script>
<?require('./footer-block.php')?>