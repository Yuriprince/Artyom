<html>
  <head>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/cards.css">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/product.css">
    <link rel="stylesheet" href="styles/cart.css">
    <link rel="stylesheet" href="styles/order.css">
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
  </head>
  <body>
  <?php include("./templates/header.php"); ?>
    <main>
        <div class="container">
          <div class="product category">
              <p class="center article">Оформление заказа</p>
              <p class="article">Доставка</p>
              <input class="choose_category" type="text" placeholder="Населённый пункт">

              <p class="article">Данные покупателя</p>
              <input class="choose_category" type="text" placeholder="Телефон">
              <input class="choose_category" type="email" placeholder="Электронная почта">
              <input class="choose_category" type="text" placeholder="Фамилия">
              <input class="choose_category" type="text" placeholder="Имя">
              <input class="choose_category" type="text" placeholder="Отчество">

              <p class="article">Выберите тип оплаты:</p>
              <div class="p-flex">
                <div class="pay-type p-flex">
                  <div class="my-order center">
                    <img class="visa" src="assets/img/visa.png" alt="tovar">
                  </div>
                  <p class="article">Банковской картой</p>
                </div>
                <div class="pay-type p-flex">
                  <div class="my-order center">
                    <img class="quadro" src="assets/img/webmoney.jpg" alt="tovar">
                  </div>
                  <p class="article">Через электронный кошёлек</p>
                </div>
                <div class="pay-type p-flex">
                  <div class="my-order center">
                    <img class="quadro" src="assets/img/bank.jpg" alt="tovar">
                  </div>
                  <p class="article">Банковским переводом</p>
                </div>
              </div>
              <p class="article center">Итого:</p>
              <p class="article center">К оплате 2100 p.</p>
              <button class="btn info-btn center">Оформить заказ</button>
          </div>

          <div class="product category">
          </div>
        </div>
    </main>
    <?php include("./templates/footer.php"); ?>
  </body>
</html>

<script src="scripts/jquery.js"></script>
<script src="scripts/order.js"></script>
<script src="scripts/header.js"></script>