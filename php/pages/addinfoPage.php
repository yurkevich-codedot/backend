<?php
require("../scripts/connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css" />
    <title>Document</title>
</head>
<body>
<section class="login">
  <div class="container">
    <div class="background"></div>
    <div class="login__wrapper">
      <div class="login__form">
        <div class="login__header">
          <h1 class="login__title">Добавление данных</h1>
          <div class="login__discription">Введите данные в соответствующие текстовые поля</div>
        </div>
        <form action="../scripts/addInfo.php" method="post"> 
            <div class="login__input-wrapper">
            <div class="login__input-wrapper-inner">
                <div class="login__input-name">Название достопримечательности</div>
                <input class="login__input" name="name" placeholder="Название достопримечательности" />
            </div>
            <div class="login__input-wrapper-inner">
                <div class="login__input-name">Категория</div>
                <input class="login__input" name="category_id" placeholder="Категория" />
            </div>
            <div class="login__input-wrapper-inner">
                <div class="login__input-name">Адрес</div>
                <input class="login__input" name="address" placeholder="Адрес" />
            </div>
            <div class="login__input-wrapper-inner">
                <div class="login__input-name">Населенный пункт</div>
                <input class="login__input" name="locality_id" placeholder="Населенный пункт" />
            </div>
            <div class="login__input-wrapper-inner">
                <div class="login__input-name">Дата основания</div>
                <input type="date" name="date" class="login__input" placeholder="Дата основания" />
            </div>
            <div class="login__input-wrapper-inner">
                <button class="btn">
                <a href="admin-panel.html">
                    <span class="btn-text">Добавить</span>
                </a>
                </button>
            </div>
            </div>
        </form>
        <div class="login__footer">
          <a href="#" class="login__footer-link">Выход</a>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>