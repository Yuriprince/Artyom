<html>
  <head>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/cards.css">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/product.css">
    <link rel="stylesheet" href="styles/cart.css">
    <link rel="stylesheet" href="styles/lk.css">
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <?php include("./templates/header.php"); ?>

    <main>
        <div class="container">
          <div class="product category">
              <p class="center article">Приобретённые ранее вещи</p>
              <div class="card">
                <div class="p-flex">
                  <img src="assets/img/jacke.jpeg" alt="tovar">
                  <div class="sub">
                    <p class="center article">Куртка демисезонная Kalo F2</p>

                    <div class="p-flex">
                      <p class="article">Размер: L</p>
                    </div>

                  </div>

                  <div class="sub">
                    <div class="p-flex">
                      <p class="article">Количество: 2</p>
                    </div>
                    <p class="p-price">1 990 p./шт</p>
                    <p class="p-price">Сумма: 3980 р.</p>
                  </div>
                  <button class="btn info-btn">
                    Добавить в корзину снова
                  </button>
              </div>

              </div>
          </div>

          <div class="product category my-order">
            <p class="center article">Личный кабинет пользователя</p>
            <p class="b-font">E-Mail: Sham23@mail.ru</p>
            <p class="b-font">Телефон: +7(906)123-43-54</p>
            <p class="b-font">Фамилия: Шамов</p>
            <p class="b-font">Имя: Яков</p>
            <p class="b-font">Отчество: Дмитриевич</p>

            <button class="btn info-btn">
              Редактировать <i class="fa fa-pencil r-icon" aria-hidden="true"></i>
            </button>
          </div>
        </div>
    </main>
    <?php include("./templates/footer.php"); ?>
  </body>
</html>