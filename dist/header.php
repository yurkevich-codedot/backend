
<?
require_once("php/scripts/connect.php");
if(isset($_POST['btn-search']))
{
  $search = $_POST['search'];
  $query = mysqli_query($mysqli, "SELECT * FROM attraction WHERE name like '%$search%'");
  $queryInfo = mysqli_fetch_all($query);
    foreach($queryInfo as $item)
    {
      $id = $item[0];
      echo "<script>window.location.href = 'attraction.php?id=$id'</script>";
      break;
    }
  }
  ;?>

<header class="header" id="myHeader">
    <div class="header__wrapper">
        <a href="/dist/index.php" class="header__title">Достопримечательности Витебской области</a>
        <input type="checkbox" id="menu" />
        <label class="menu" for="menu">
            <div class="header__menu-btn">
                <div class="header__menu-icon"></div>
            </div>
        </label>
        <label class="backdrop" for="menu"></label>
        <nav class="header__nav-wrapper">
          <div class="header__cross-wrapper">
            <label for="menu"><div class="header__cross"></div></label>
          </div>
           <a href="/dist/profile-user.php" class="header__item header__user"
            ><?echo $_SESSION['email']?></a
          >
          <div class="header__nav-wrapper-list">
            <div class="header__nav-list">
              <a href="/dist/index.php" class="header__item header__item--active"
                >Главная</a
              >
              <a href="/dist/news.php?page=1" class="header__item">Новости</a>
              <a href="/dist/content.php" class="header__item"
                >Достопримечательности</a
              >
              <form method="POST" action="header.php" class="main__search-wrapper">
                <input
                  type="search"
                  class="main__search-fild"
                  id="search"
                  name="search"
                  placeholder="Поиск..."autocomplete="off"
                />
                  <ul class="main__prompt-items">
                    <?
                      $attraction = mysqli_query($mysqli, "SELECT * FROM `attraction`");
                      $attractions = mysqli_fetch_all($attraction);
                    foreach($attractions as $item)
                    {
                      echo '<a href="attraction.php?id='.$item[0].'" class="main__prompt-item">'.$item[1].'</a>';
                    }
                    ?>
                  </ul>
                <button class="main__search-icon" name="btn-search">
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
              </form>
            </div>
            <?
            if(!isset($_SESSION['email']))
            {
              echo '  <a href="./php/pages/loginPage.php" class="header__btn-sign"
              >Войти</a
            >';
            }
            ?>
          </div>
        </nav>
      </div>
</header>
