<html>
  <head>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/cards.css">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/product.css">
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <?php include("./templates/header.php"); ?>

    <main>
      <p class="center category" id="nav"><a href="">Главная </a>
        /  <a href=""> Туризм </a> / <a href="">Куртки</a> / <a href="">Жилет Nova</a></p>
        <div class="container">
          <div class="product category">
              <p class="center article">Куртка демисезонная Kalo F2</p>

              <div class="p-flex">
                  <img class="img" src="assets/img/jacke.jpeg" alt="tovar">
                <div class="gray">
                  <p class="center article">Характеристики</p>
                  <div class="p-flex">
                    <p>Размеры: </p>
                    <select class="choose_category">
                      <option>M</option>
                      <option>L</option>
                      <option>XL</option>
                      <option>XXL</option>
                    </select>
                  </div>
                  <p class="mytype">Тип: демисезонная</p>
                </div>
                <div class="gray">
                  <p class="p-price">1 990 p.</p>

                  <div class="p-flex">
                    <p>Количество:</p>
                    <input class="counter" type="number" step="1" min="1" max="10" id="num_count" name="quantity" value="1">
                  </div>
                  
                  <button class="btn info-btn">Добавить в корзину <i class="fa fa-cart-arrow-down white" aria-hidden="true"></i></button>
                  <button class="btn info-btn">Купить</button>

                </div>
              </div>
              <p class="center article">Описание</p>
              <p class="center description">Эта куртка создана для тех, кто не представляет свою жизнь без приключений. 
                Термоизоляционное покрытие во внутренней части не дадут опытному путешественнеку замёрзнуть.</p>
          </div>
        </div>
    </main>
    <?php include("./templates/footer.php"); ?>
  </body>
</html>

<script src="scripts/jquery.js"></script>
<script src="scripts/getProd.js"></script>
<script src="scripts/search_prepare.js"></script>