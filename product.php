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
        /  <a href=""> Туризм </a> / <a href="">Куртки</a> / <a href="">Куртка демисезонная Kalo F2</a></p>
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
    <footer>

      <div id="footer-column" class="container">
          <div class="trademark category">
              <p>&#169; 2020 ЗАО "Форт Поход"</p>
              <a href="">fp-sale@bk.ru</a>
          </div>

          <div class="links">
              <ul class="category ul-foot">
                  <li><a href="">Для военных и госслужащих</a></li>
                  <li><a href="">Для рабочих</a></li>
                  <li><a href="">Охота и рыбалка</a></li>
                  <li><a href="">Туризм</a></li>
                  <li><a href="">Дети</a></li>
                  <li><a href="">Акции</a></li>
                  <li><a href="">Распродажа</a></li>
              </ul>
          </div>
          <div class="development category">
              <a href="">Интернет-магазин спецодежды</a>
              <p>Всё лучшее у нас!</p>
          </div>
      </div>
  </footer>
  </body>
</html>

<script src="scripts/jquery.js"></script>
<script src="scripts/getProd.js"></script>