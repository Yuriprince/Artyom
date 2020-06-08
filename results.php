<html>
  <head>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/cards.css">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <?php include("./templates/header.php"); ?>

    <main>
      <p class="center category" id="nav"><a href="">Главная </a>
        /  <a href=""> Туризм </a>  /  Куртки</p>
      <div class="container">
        <div id="content-products">
          <ul class="category">
              <li> <p class="lined">Туризм</p> </li>
                  <ul id="main-cat">
                      <li class="menu-item" id="selected11">Куртки</li>
                      <li class="menu-item">Жилеты</li>
                      <li class="menu-item">Кепи</li>
                      <li class="menu-item">Комбинезоны</li>
                  </ul>
              </li>
          </ul>
        </div>
          <div id="card-container">
            <div class="cards">
            </div>
          </div>
        </div>
        <div class="numbers">
  
          <a href="">1</a></li>

      </div>
    </main>
    <?php include("./templates/footer.php"); ?>
  </body>
</html>

<script src="scripts/jquery.js"></script>
<script src="scripts/search_results.js"></script>
<script src="scripts/gotoproduct.js"></script>
<script src="scripts/search_prepare.js"></script>