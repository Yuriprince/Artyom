<html>
  <?php include("./templates/css_depends.php"); ?>
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
                      <li id="selected1">Куртки</li>
                      <li>Жилеты</li>
                      <li>Кепи</li>
                      <li>Комбинезоны</li>
                  </ul>
              </li>
          </ul>
        </div>
          <div id="card-container">
            <div class="cards">

            <?php 
                  for($i = 0; $i < 5; $i++) {?>
                    <div class="product-card category">
                    <img src="assets/img/jacke.jpeg" alt="tovar">
                    <p class="tovar-desc">Куртка демисезонная Kalo F2</p>
                    <p class="characters">50% полиэстер, 20% нейлон, водонепроницаемая...</p>
                    <p class="price">1 990 p. </p>

                    <div class="p-flex">
                      <button class="btn info-btn vis"><i class="fa fa-pencil i-cntr" aria-hidden="true"></i></button>
                      <button class="btn info-btn vis"><i class="fa fa-trash i-cntr" aria-hidden="true"></i></button>
                    </div>

                </div>
           <?php  }
                ?>
            </div>
          </div>

          <div class="product category min-width">
            <p class="center article">Панель администратора </p>
            <button class="btn info-btn">Добавить товар</button>
            <button class="btn info-btn">Добавить акцию</button>
            <button class="btn info-btn full-text">Организовать распродажу</button>
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
<script src="scripts/admin.js"></script>