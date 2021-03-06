<?php
require ('./header-block.php');
require ('./header.php');
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
        <section class="profile profile-user">
          <div class="profile__content">
            <h3 class="profile__content-title">Профиль</h3>
            <form class="profile-user__wrapper">
              <label
                ><div class="profile__item">
                  <span>Эл.почта:</span>
                  <input
                    class="profile__item-input"
                    value="<?= $_SESSION['email']?>"
                    readonly
                  /></div
              ></label>
              <label
                ><div class="profile__item">
                  <span>Пароль:</span>
                  <input
                    type="password"
                    id="password"
                    class="profile__item-input"
                    value="<?echo $_SESSION['password']?>"
                    readonly
                    onmouseout="this.type='password'"
                    onmouseover="this.type='text'"
                  /></div
              ></label>
              <a href="#" class="profile__btn" onclick="onEdit()">Изменить</a>
            </form>
          </div>
        </section>
      </div>
    </div>
    <script>
      function onEdit()
      {
        var link = document.querySelectorAll('form input');
        for (var i = 0; i < link.length; i++) {
        link[i].onclick = function(event) {	
          event.preventDefault;
          this.parentElement.querySelector('input').readOnly = false;
         }
      }

      if(document.querySelector(".profile__btn").textContent == "Сохранить")
      {
        let formData = new FormData();
        formData.append("id", <?= $_SESSION['id'] ?>);
        formData.append("password", document.getElementById("password").value);
        var request = new XMLHttpRequest();
        request.open("POST", "/dist/php/scripts/updatepass.php", true);
        request.onload = function(result_event) {
          console.log(request.response);
          if(Number.parseInt(request.response) > 0) {
            alert("Пароль успешно изменен");
          }
          else {
            alert("Ошибка при смене пароля");
          }
        };
        request.send(formData);
      }

      document.querySelector(".profile__btn").textContent = "Сохранить";
      var inputs = document.querySelectorAll(".profile__item-input");
      {
        for(var i=0;i<inputs.length;i++)
        {
          inputs[i].classList.add("profile__btn-active");
        }
      }

     
    }
    </script>
    <?
    require ('./preloader.php');
    require('./footer-block.php');
    ?>
    