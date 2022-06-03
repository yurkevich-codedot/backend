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
    <section class="map" data-barba="wrapper">
      <div class="container" data-barba="container" data-barba-namespace="content">
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
          $extquery = "";
          if(isset($_REQUEST['id']))
          {
            $extquery = "where locality_id=".$_REQUEST['id'];
          }
          $attractions = mysqli_query($mysqli,'SELECT * FROM `attractioninfo`  '.$extquery);
          $categories = mysqli_query($mysqli, 'SELECT * FROM `categories` WHERE id IN (SELECT `attraction`.`category_id` FROM `attraction` '.$extquery.' )');
          $info = mysqli_fetch_all($attractions);
          $titles = mysqli_fetch_all($categories);
          foreach($titles as $title)
          {
            echo '<div class="content__items swiper">
                          <h1 class="main__title--padding-bottom">'.$title[1].'</h1>
                            <div class="swiper-wrapper swiper-flex">';
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
                  </div>
                ';
                echo '<div class="swiper-pagination"></div>
          <div class="prev"></div>
        <div class="next"></div>
       <div class="swiper-scrollbar"></div>
     </div>';
          }
          
          ?>
        </div>
      </div>
    </section>
    <script>
      mapboxgl.accessToken  = 'pk.eyJ1IjoiZGFudmVyeXVyayIsImEiOiJjbDJ1NXY3YWgwYjV3M2NvNHRteW9tZXpkIn0.zXeb65io4SiZQl3BbejBMQ';
      const mapPointer = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/danveryurk/cl3x8cuwi009r14rrtuggor4t',
        center: [30.1959, 55.187],
        zoom: 5
      });

      var getJSON = function (url, callback) {
        var xhr = new XMLHttpRequest();
        xhr.open("GET", url, true);
        xhr.responseType = "json";
        xhr.onload = function () {
          var status = xhr.status;
          if (status === 200) {
            callback(null, xhr.response);
          } else {
            callback(status, xhr.response);
          }
        };
        xhr.send();
      };

      mapPointer.on('load', () => {
        mapPointer.loadImage('https://docs.mapbox.com/mapbox-gl-js/assets/custom_marker.png', function(error, image) {
          if (error) throw error;
          mapPointer.addImage('marker', image);

          
          getJSON('php/scripts/getgeojson.php?locality_id=<?= isset($_REQUEST['id']) ? $_REQUEST['id'] : 0?>', function(err, data) {
            if (err !== null) {
              alert('Something went wrong: ' + err);
            } 
            else {
              mapPointer.flyTo({center:data.avg_location});

              for (const feature of data.features) {
                const el_div = document.createElement('div');
                el_div.className = 'marker';
                // var text = document.createTextNode(`${feature.properties.title}`);
                // el_div.appendChild(text);

                new mapboxgl.Marker(el_div).setLngLat(feature.geometry.coordinates).addTo(mapPointer);

                new mapboxgl.Marker(el_div)
                .setLngLat(feature.geometry.coordinates)
                .setPopup( 
                  new mapboxgl.Popup({ offset: 25 }) 
                    .setHTML(
                      `<h5>${feature.properties.title}</h5>
                      <div style="display:flex"> 
                        <div><img src="img/uploads/attractions/${feature.properties.id}/1.png" width=50 height=50></div>
                        <div>
                          <p>${feature.properties.category}(${feature.properties.type})</p>
                          <p>Адрес: ${feature.properties.place}</p>
                          <p>Дата основания: ${feature.properties.date}</p>
                        </div>
                      </div>
                      <a href="attraction.php?id=${feature.properties.id}">Подробнее</a>`
                    )
                )
                .addTo(mapPointer);
              }
            }
          });
        });
      });
    </script>
    <?
    require ('./preloader.php');
    require('./footer-block.php');
    ?>
    
