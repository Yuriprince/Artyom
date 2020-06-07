<html>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/cards.css">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
  <body>
    <?php include("./templates/header.php"); ?>

    <main>
      <div class="container wrap">
        <div class="img">
          <div class="bottom">
            <p class="new">Созданы для экстремальной рыбалки</p>
            <p class="header">NORDMAN 23-1R</p>
            <button class="btn">Купить</button>
            <button class="btn">Для детей</button>
          </div>
        </div>
        <div>
          <p>Хиты продаж:</p>
          <div id="card-container">
            <div class="cards">

                <?php 

                  for($i = 0; $i < 5; $i++) {?>
                    <div class="product-card category">
                        <img src="assets/img/jacke.jpeg" alt="tovar">
                        <p class="tovar-desc">Куртка демисезонная Kalo F2</p>
                        <p class="characters">50% полиэстер, 20% нейлон, водонепроницаемая...</p>
                        <p class="price">1 990 p. <a href="">
                            <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                        </a></p>
                        <button class="btn info-btn">Подробнее</button>
                    </div>
           <?php  }
                ?>
            </div>
          </div>
        </div>
      </div>
      
    </main>
    <?php include("./templates/footer.php"); ?>
  </body>
</html>

<script src="scripts/jquery.js"></script>
<script src="scripts/search.js"></script>