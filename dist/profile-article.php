<?php
require ('./header-block.php');
require ('./header.php');

$result_object = null;
if(isset($_REQUEST['type']) && isset($_REQUEST['id'])) {
  $result_object = mysqli_fetch_assoc( mysqli_query($mysqli, "select * from news where id=".$_REQUEST['id']) );
}   

?>

    <div class="container">
      <div class="profile__wrapper">
      <section class="profile profile-menu">
          <div class="profile-menu__item">
            <div class="profile-menu__item-icon">
              <svg
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M19.7274 20.4471C19.2716 19.1713 18.2672 18.0439 16.8701 17.2399C15.4729 16.4358 13.7611 16 12 16C10.2389 16 8.52706 16.4358 7.12991 17.2399C5.73276 18.0439 4.72839 19.1713 4.27259 20.4471"
                  stroke="black"
                  stroke-width="2"
                  stroke-linecap="round"
                />
                <circle
                  cx="12"
                  cy="8"
                  r="4"
                  stroke="black"
                  stroke-width="2"
                  stroke-linecap="round"
                />
              </svg>
            </div>
            <a href="/dist/profile-user.php" class="profile-menu__item-link"
              >Профиль</a
            >
          </div>
          <?
          if($_SESSION['role']=='admin')
          {
            echo ' <div class="profile-menu__item">
            <div class="profile-menu__item-icon">
              <svg
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M12 4V4C8.22876 4 6.34315 4 5.17157 5.17157C4 6.34315 4 8.22876 4 12V18C4 18.9428 4 19.4142 4.29289 19.7071C4.58579 20 5.05719 20 6 20H12C15.7712 20 17.6569 20 18.8284 18.8284C20 17.6569 20 15.7712 20 12V12"
                  stroke="black"
                  stroke-width="2"
                />
                <path
                  d="M9 10L15 10"
                  stroke="black"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <path
                  d="M9 14H12"
                  stroke="black"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <path
                  d="M19 8L19 2M16 5H22"
                  stroke="black"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </div>
            <a href="/dist/profile-article.php" class="profile-menu__item-link"
              >Добавить статью</a
            >
          </div>';
          }
          else
          {
            echo ' <div class="profile-menu__item">
            <div class="profile-menu__item-icon">
              <svg
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M12 4V4C8.22876 4 6.34315 4 5.17157 5.17157C4 6.34315 4 8.22876 4 12V18C4 18.9428 4 19.4142 4.29289 19.7071C4.58579 20 5.05719 20 6 20H12C15.7712 20 17.6569 20 18.8284 18.8284C20 17.6569 20 15.7712 20 12V12"
                  stroke="black"
                  stroke-width="2"
                />
                <path
                  d="M9 10L15 10"
                  stroke="black"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <path
                  d="M9 14H12"
                  stroke="black"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <path
                  d="M19 8L19 2M16 5H22"
                  stroke="black"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </div>
            <a href="/dist/profile-article.php" class="profile-menu__item-link"
              >Предложить статью</a
            >
          </div>';
          }
          ?>
          <?if($_SESSION['role']=='admin')
          {
            echo '<div class="profile-menu__item">
            <div class="profile-menu__item-icon">
              <svg
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M12.398 19.804L12.8585 20.6917L12.8585 20.6917L12.398 19.804ZM11.602 19.804L11.1415 20.6917L11.1415 20.6917L11.602 19.804ZM18 11C18 13.1458 16.9079 14.9159 15.545 16.2906C14.183 17.6644 12.6342 18.555 11.9376 18.9163L12.8585 20.6917C13.6448 20.2838 15.397 19.2805 16.9653 17.6987C18.5326 16.1178 20 13.8706 20 11H18ZM12 5C15.3137 5 18 7.68629 18 11H20C20 6.58172 16.4183 3 12 3V5ZM6 11C6 7.68629 8.68629 5 12 5V3C7.58172 3 4 6.58172 4 11H6ZM12.0624 18.9163C11.3658 18.555 9.81702 17.6644 8.45503 16.2906C7.09211 14.9159 6 13.1458 6 11H4C4 13.8706 5.46741 16.1178 7.03474 17.6987C8.60299 19.2805 10.3552 20.2838 11.1415 20.6917L12.0624 18.9163ZM11.9376 18.9163C11.9514 18.9091 11.9733 18.9023 12 18.9023C12.0267 18.9023 12.0486 18.9091 12.0624 18.9163L11.1415 20.6917C11.6831 20.9726 12.3169 20.9726 12.8585 20.6917L11.9376 18.9163ZM14 11C14 12.1046 13.1046 13 12 13V15C14.2091 15 16 13.2091 16 11H14ZM12 9C13.1046 9 14 9.89543 14 11H16C16 8.79086 14.2091 7 12 7V9ZM10 11C10 9.89543 10.8954 9 12 9V7C9.79086 7 8 8.79086 8 11H10ZM12 13C10.8954 13 10 12.1046 10 11H8C8 13.2091 9.79086 15 12 15V13Z"
                  fill="black"
                />
              </svg>
            </div>
            <a href="/dist/profile-attraction.php" class="profile-menu__item-link"
              >Добавить достопримечательность</a
            >
          </div>';
          }
          else
          {
            echo '<div class="profile-menu__item">
            <div class="profile-menu__item-icon">
              <svg
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M12.398 19.804L12.8585 20.6917L12.8585 20.6917L12.398 19.804ZM11.602 19.804L11.1415 20.6917L11.1415 20.6917L11.602 19.804ZM18 11C18 13.1458 16.9079 14.9159 15.545 16.2906C14.183 17.6644 12.6342 18.555 11.9376 18.9163L12.8585 20.6917C13.6448 20.2838 15.397 19.2805 16.9653 17.6987C18.5326 16.1178 20 13.8706 20 11H18ZM12 5C15.3137 5 18 7.68629 18 11H20C20 6.58172 16.4183 3 12 3V5ZM6 11C6 7.68629 8.68629 5 12 5V3C7.58172 3 4 6.58172 4 11H6ZM12.0624 18.9163C11.3658 18.555 9.81702 17.6644 8.45503 16.2906C7.09211 14.9159 6 13.1458 6 11H4C4 13.8706 5.46741 16.1178 7.03474 17.6987C8.60299 19.2805 10.3552 20.2838 11.1415 20.6917L12.0624 18.9163ZM11.9376 18.9163C11.9514 18.9091 11.9733 18.9023 12 18.9023C12.0267 18.9023 12.0486 18.9091 12.0624 18.9163L11.1415 20.6917C11.6831 20.9726 12.3169 20.9726 12.8585 20.6917L11.9376 18.9163ZM14 11C14 12.1046 13.1046 13 12 13V15C14.2091 15 16 13.2091 16 11H14ZM12 9C13.1046 9 14 9.89543 14 11H16C16 8.79086 14.2091 7 12 7V9ZM10 11C10 9.89543 10.8954 9 12 9V7C9.79086 7 8 8.79086 8 11H10ZM12 13C10.8954 13 10 12.1046 10 11H8C8 13.2091 9.79086 15 12 15V13Z"
                  fill="black"
                />
              </svg>
            </div>
            <a href="/dist/profile-attraction.php" class="profile-menu__item-link"
              >Предложить достопримечательность</a
            >
          </div>';
          }
            ?>
          <?if ($_SESSION['role'] == 'admin')
              {
                echo  '<div class="profile-menu__item">
                <div class="profile-menu__item-icon">
                  <svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M8 10L8 16"
                      stroke="black"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                    <path
                      d="M12 12V16"
                      stroke="black"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                    <path
                      d="M16 8V16"
                      stroke="black"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                    <rect
                      x="3"
                      y="4"
                      width="18"
                      height="16"
                      rx="2"
                      stroke="black"
                      stroke-width="2"
                    />
                  </svg>
                </div>
                <a
                  href="php/pages/admin-panel.php"
                  class="profile-menu__item-link"
                  >Панель администратора</a
                >
              </div>';
              } 
              ?>
          <div class="profile-menu__item">
            <div class="profile-menu__item-icon">
              <svg
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M2 12L1.21913 11.3753L0.719375 12L1.21913 12.6247L2 12ZM11 13C11.5523 13 12 12.5523 12 12C12 11.4477 11.5523 11 11 11V13ZM5.21913 6.3753L1.21913 11.3753L2.78087 12.6247L6.78087 7.6247L5.21913 6.3753ZM1.21913 12.6247L5.21913 17.6247L6.78087 16.3753L2.78087 11.3753L1.21913 12.6247ZM2 13H11V11H2V13Z"
                  fill="black"
                />
                <path
                  d="M13.3424 20.5571L13.5068 19.5707L13.3424 20.5571ZM20.9391 20.7477L21.5855 21.5107L20.9391 20.7477ZM15.0136 3.1644L14.8492 2.178L15.0136 3.1644ZM20.9391 3.25232L21.5855 2.4893L20.9391 3.25232ZM13.5068 4.42933L15.178 4.15079L14.8492 2.178L13.178 2.45654L13.5068 4.42933ZM21 9.08276V14.9172H23V9.08276H21ZM15.178 19.8492L13.5068 19.5707L13.178 21.5435L14.8492 21.822L15.178 19.8492ZM11 8.13193V7.38851H9V8.13193H11ZM11 16.6115V16.066H9V16.6115H11ZM13.5068 19.5707C12.6833 19.4334 12.1573 19.3439 11.7726 19.2294C11.4147 19.1228 11.301 19.0276 11.237 18.9521L9.71094 20.2449C10.1209 20.7288 10.6432 20.9799 11.202 21.1462C11.7339 21.3046 12.4052 21.4147 13.178 21.5435L13.5068 19.5707ZM9 16.6115C9 17.395 8.99818 18.0752 9.06695 18.626C9.13917 19.2044 9.30096 19.7609 9.71094 20.2449L11.237 18.9521C11.173 18.8766 11.0978 18.7487 11.0515 18.3782C11.0018 17.9799 11 17.4463 11 16.6115H9ZM21 14.9172C21 16.5917 20.9976 17.7403 20.8773 18.5879C20.7609 19.4077 20.5567 19.7611 20.2927 19.9847L21.5855 21.5107C22.3825 20.8356 22.7086 19.9176 22.8575 18.8689C23.0024 17.8479 23 16.5306 23 14.9172H21ZM14.8492 21.822C16.4406 22.0872 17.7396 22.3061 18.7705 22.3311C19.8294 22.3566 20.7885 22.1858 21.5855 21.5107L20.2927 19.9847C20.0288 20.2082 19.6467 20.3516 18.8189 20.3316C17.963 20.311 16.8297 20.1245 15.178 19.8492L14.8492 21.822ZM15.178 4.15079C16.8297 3.87551 17.963 3.68904 18.8189 3.66836C19.6467 3.64836 20.0288 3.79177 20.2927 4.01534L21.5855 2.4893C20.7885 1.81418 19.8294 1.64336 18.7705 1.66895C17.7396 1.69385 16.4406 1.91277 14.8492 2.178L15.178 4.15079ZM23 9.08276C23 7.46941 23.0024 6.15211 22.8575 5.13109C22.7086 4.08239 22.3825 3.16442 21.5855 2.4893L20.2927 4.01534C20.5567 4.23891 20.7609 4.59225 20.8773 5.41214C20.9976 6.25971 21 7.40829 21 9.08276H23ZM13.178 2.45654C12.4052 2.58534 11.7339 2.69537 11.202 2.85375C10.6432 3.0201 10.1209 3.27116 9.71094 3.75513L11.237 5.04788C11.301 4.97236 11.4147 4.87716 11.7726 4.77061C12.1573 4.65609 12.6833 4.56658 13.5068 4.42933L13.178 2.45654ZM11 7.38851C11 6.55366 11.0018 6.02008 11.0515 5.62183C11.0978 5.25128 11.173 5.1234 11.237 5.04788L9.71094 3.75513C9.30096 4.2391 9.13917 4.79555 9.06695 5.37405C8.99818 5.92484 9 6.60502 9 7.38851H11Z"
                  fill="black"
                />
              </svg>
            </div>
            <a href="/dist/php/pages/loginPage.php" class="profile-menu__item-link">Выйти</a>
          </div>
      </section>
        <section class="profile profile-article">
          <div class="profile__content">
          <? if($_REQUEST['type'] == 'add'): ?>
              <h3 class="profile__content-title">
                Создать статью
              </h3>
            <?elseif($_REQUEST['type'] == 'edit'): ?>
              <h3 class="profile__content-title">
                Изменить статью
              </h3>
            <?else: ?>
              <h3 class="profile__content-title">
              Предложить статью
            </h3>
            <?endif; ?>
            <form class="profile-article__wrapper" name="upload_photo" method="POST"  enctype="multipart/form-data" action="/dist/php/scripts/upload_photo.php">
            <div class="profile__img-container">
                <label class="profile__img-wrapper">
                    <div class="profile__img-inner">
                      <div class="profile__img-background">
                        <div class="profile__img-icon">
                          <svg
                            width="120"
                            height="120"
                            viewBox="0 0 24 24"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M3.17157 3.17157C2 4.34314 2 6.22876 2 9.99999V14C2 17.7712 2 19.6568 3.17157 20.8284C4.34315 22 6.22876 22 10 22H14C17.7712 22 19.6569 22 20.8284 20.8284C22 19.6569 22 17.7712 22 14V14V9.99999C22 7.16065 22 5.39017 21.5 4.18855V17C20.5396 17 19.6185 16.6185 18.9393 15.9393L18.1877 15.1877C17.4664 14.4664 17.1057 14.1057 16.6968 13.9537C16.2473 13.7867 15.7527 13.7867 15.3032 13.9537C14.8943 14.1057 14.5336 14.4664 13.8123 15.1877L13.6992 15.3008C13.1138 15.8862 12.8212 16.1788 12.5102 16.2334C12.2685 16.2758 12.0197 16.2279 11.811 16.0988C11.5425 15.9326 11.3795 15.5522 11.0534 14.7913L11 14.6667C10.2504 12.9175 9.87554 12.0429 9.22167 11.7151C8.89249 11.5501 8.52413 11.4792 8.1572 11.5101C7.42836 11.5716 6.75554 12.2445 5.40989 13.5901L3.5 15.5V2.88739C3.3844 2.97349 3.27519 3.06795 3.17157 3.17157Z"
                              fill="rgb(180, 180, 180)"
                            />
                            <path
                              d="M3 10C3 8.08611 3.00212 6.75129 3.13753 5.74416C3.26907 4.76579 3.50966 4.2477 3.87868 3.87868C4.2477 3.50966 4.76579 3.26907 5.74416 3.13753C6.75129 3.00212 8.08611 3 10 3H14C15.9139 3 17.2487 3.00212 18.2558 3.13753C19.2342 3.26907 19.7523 3.50966 20.1213 3.87868C20.4903 4.2477 20.7309 4.76579 20.8625 5.74416C20.9979 6.75129 21 8.08611 21 10V14C21 15.9139 20.9979 17.2487 20.8625 18.2558C20.7309 19.2342 20.4903 19.7523 20.1213 20.1213C19.7523 20.4903 19.2342 20.7309 18.2558 20.8625C17.2487 20.9979 15.9139 21 14 21H10C8.08611 21 6.75129 20.9979 5.74416 20.8625C4.76579 20.7309 4.2477 20.4903 3.87868 20.1213C3.50966 19.7523 3.26907 19.2342 3.13753 18.2558C3.00212 17.2487 3 15.9139 3 14V10Z"
                              stroke="rgb(180, 180, 180)"
                              stroke-width="2"
                            />
                            <circle cx="15" cy="9" r="2" fill="rgb(180, 180, 180)" />
                          </svg>
                        </div> 
                      <h5 class="profile__img-title">Нажмите для добавления фотографии</h5>
                      <input type="file" id="file" onchange="showMyImage(this)" multiple accept="image/png"/>
                    </div>
                    </div>
                </label>
                <div class="profile__images-wrapper">
                  <div class="profile__img-items">
                  <?php 
                    if($_REQUEST['type'] == 'edit' && is_dir("img/uploads/news/".$_REQUEST['id']."/")) {
                        $images = scandir("img/uploads/news/".$_REQUEST['id']."/", 1);
                        for ($i=0; $i < count($images)-2; $i++) { 
                          $info = pathinfo($images[$i]);
                          echo '<div class="profile__img-inner" id="'.$info['filename'].'">
                                      <div onclick="removeEditPhoto(this)" class="profile__delete-btn" id="'.$info['filename'].'"></div>
                                      <img class="img3" src="img/uploads/news/'.$_REQUEST['id'].'/'.$images[$i].'">
                                    </div>';
                        }
                    }
                ?>
                  </div>
                </div>
            </div>
              <div class="profile__items">
                <div class="profile__item">
                  <input
                    name="item_article"
                    class="profile__item-input"
                    placeholder="Заголовок статьи"
                    value="<?=$result_object['name']?>"
                  />
                </div>
                <div class="profile__item">
                <textarea class="profile__item-input article" name="item_description" placeholder="Описание"><?=$result_object['discription']?></textarea>
                </div>
                <? if($_REQUEST['type'] == 'add'): ?>
                  <input  class="profile__btn" type="submit" name="action" value="Создать статью"/>
                <?elseif($_REQUEST['type'] == 'edit'): ?>
                  <input type="checkbox" name="suggest"/><label for="suggest">Опубликовать запись</label>
                  <input  class="profile__btn" type="submit" name="action" value="Изменить статью"/>
                <?else: ?>
                  <input  class="profile__btn" type="submit" name="action" value="Предложить достопримечательность"/>
                <?endif; ?>
              </div>
            </form>
          </div>
        </section>
      </div>
    </div>
    <script>
      let img__wrapper = document.querySelector(".profile__img-items")
      let index = 0;
      let filesUploaded = [];
      let removedEditedPhotos = []

      function removeEditPhoto(e) {
        removedEditedPhotos[removedEditedPhotos.length] =  e.id ;
        e.parentElement.remove();
      }


      var form = document.forms.namedItem("upload_photo");
      form.addEventListener('submit', (e) =>{

        let formData = new FormData(form);
        formData.append('type', "news");
        formData.append('method', "<?=$_REQUEST['type']?>");
        formData.append('id', "<?=$_REQUEST['id']?>");
        filesUploaded.forEach(_file => {
          if(_file != null)
            formData.append('files[]', _file);
        });

        removedEditedPhotos.forEach(item => {
          formData.append('deleting[]', item);
        });
        var request = new XMLHttpRequest();
        request.open("POST", "/dist/php/scripts/upload_photo.php", true);
        request.onload = function(result_event) {
          if(Number.parseInt(request.response) > 0) {
            alert("Новость была успешно предложена!!!!!!!");
            location.reload();
          }
          else {
            alert("Ошибка добавления");
          }
        };
        request.send(formData);
        e.preventDefault();
        
      });

      function showMyImage(input)
      {
        let file = input.files || input.currentTarget.files;
        let reader = [];
        let name;
        for(let i in file)
        {
          if(file.hasOwnProperty(i))
          {
            reader[i] =  new FileReader();
            reader[i].readAsDataURL(input.files[i]);
            (function () 
            {
              reader[i].onload = function(e)
              {
                console.log("files: " +i+ " | index=" + index);
                filesUploaded[index] = input.files[i];

                let img__inner = document.createElement("div");
                img__inner.classList.add("profile__img-inner");
                img__inner.id = index;
                let dlt_btn = document.createElement("div");
                dlt_btn.classList.add("profile__delete-btn");
                dlt_btn.id = index;
                img__inner.appendChild(dlt_btn);
                img__wrapper.appendChild(img__inner);

                let img = document.createElement("img");
                img__inner.appendChild(img);
                img.classList.add("img3");
                img.src = e.target.result;
                document.getElementById(index).onclick = removeElement;
                index++;

                function removeElement() {
                  if(img__inner.id == dlt_btn.id)
                  {
                    filesUploaded[img__inner.id] = null;
                    document.getElementById(img__inner.id).remove();
                  }
                 }
              }
            })();
          }
        }
      }
    </script>
    <?
    require ('./preloader.php');
    require('./footer-block.php');
    ?>
    
