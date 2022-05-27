<?php
require ('./header-block.php');
require ('./header.php');
$id = $_GET['id'];
$sql = mysqli_query($mysqli,"SELECT * FROM `news` WHERE `news`.`id`= '$id'");
$sqlView = mysqli_query($mysqli,"SELECT * FROM `newsinfo` WHERE `newsinfo`.`id`= '$id'");
$infoView = mysqli_fetch_all($sqlView);
$info = mysqli_fetch_all($sql);
?>

    <section class="background">
      <?
      $file = $_SERVER['DOCUMENT_ROOT']."/dist/img/uploads/news/$id/main.png";
      $file_exists = file_exists($file);
      if($file_exists)
      {
        echo '<picture
        ><img
          src="./img/uploads/news/'.$id.'/main.png"
          class="background__img"
          alt="background"
      /></picture>';
        }
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
            <?
             foreach($info as $item)
             {
               
            echo'
            <a href="/dist/news.php" class="main__breadcrump"
              >Новости</a
            >
            <a href="#" class="main__breadcrump">'.$item[1].'</a>
          </div>
          <div class="content__discription">
            <h1 class="main__title">'.$item[1].'</h1>';}
            ?>
            <?
             foreach($infoView as $k)
             {
             echo '
             <div class="paragraph__about-wrapper">
             <div class="paragraph__about-inner">
                 <div class="paragraph__about-user">Автор: '.$k[4].'</div>
                 <div class="paragraph__about-data"> Дата публикации:'.$k[3].'</div>
                 </div>
                 </div>';
             }?>

          </div>
        </div>
      </div>
    </section>
    <section class="paragraph">
      <div class="container">
        <div class="paragraph__wrapper">

          <?
          foreach($info as $item)
          {
            echo '<div class="paragraph__item">
            <div class="paragraph__content">
              <div class="attraction__paragraph-discription">
              <pre>'.$item[2].'</pre>
              </div>';
          }
              ?>
            </div>
            <div class="main__img-container infoswiper">
              <div class="swiper-wrapper swiper-flex">
              <?
              $counter = 1; 
              do
              {
              $file = $_SERVER['DOCUMENT_ROOT']."/dist/img/uploads/news/$id/$counter.png";
              $file_exists = file_exists($file);
              if($file_exists)
                {
                echo '
                <div class="main__img-wrapper swiper-slide">
                  <picture class="main__img-inner"
                    ><img
                      src="./img/uploads/news/'.$id.'/'.$counter.'.png"
                      class="main__img"
                      alt="lol"
                  /></picture>
                </div>';
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
      </div>
    </section>
    <?require('./footer-block.php')?>
