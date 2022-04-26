<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../style/style.css" />
    <title>Document</title>
  </head>
  <body></body>
</html>
<section class="login">
  <div class="container">
    <div class="background"></div>
    <div class="login__wrapper">
      <div class="login__form">
        <div class="login__header">
          <div class="icon">
            <svg
              width="48"
              height="49"
              viewBox="0 0 48 49"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <circle cx="24" cy="24.4102" r="24" fill="#3751FF" />
              <path
                d="M16.5 14.9102C16.5 14.3579 16.9477 13.9102 17.5 13.9102H23.9857C27.319 13.9102 29.9 14.8245 31.7286 16.6531C33.5762 18.4818 34.5 21.0576 34.5 24.3807C34.5 27.7234 33.5762 30.3189 31.7286 32.1672C29.9 33.9958 27.319 34.9102 23.9857 34.9102H17.5C16.9477 34.9102 16.5 34.4624 16.5 33.9102V14.9102Z"
                fill="url(#paint0_linear_1403_3398)"
              />
              <defs>
                <linearGradient
                  id="paint0_linear_1403_3398"
                  x1="16.5"
                  y1="13.9102"
                  x2="34.5"
                  y2="34.9102"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="white" stop-opacity="0.7" />
                  <stop offset="1" stop-color="white" />
                </linearGradient>
              </defs>
            </svg>
          </div>
          <h2 class="login__title">ВХОД</h2>
          <div class="login__discription">
            Введите адрес электронной почты и пароль ниже
          </div>
        </div>
        <div class="login__input-wrapper">
          <div class="login__input-wrapper-inner">
            <div class="login__input-name">Эл. почта</div>
            <input
              type="email"
              class="login__input"
              placeholder="Электронная почта"
            />
          </div>
          <div class="login__input-wrapper-inner">
            <div class="login__input-name">
              Пароль
              <a href="#" class="link">Забыли пароль?</a>
            </div>
            <input type="password" class="login__input" placeholder="Пароль" />
          </div>
          <div class="login__input-wrapper-inner">
            <a href="../pages/admin-panel.php" class="btn">
                <span class="btn-text">Войти</span>
            </a>
          </div>
        </div>
        <div class="login__footer">
          <div class="login__footer-discription">У вас ещё нет аккаунта?</div>
          <a href="#" class="login__footer-link">Регистрация</a>
        </div>
      </div>
    </div>
  </div>
</section>
