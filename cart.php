<html>
  <?php include("./templates/css_depends.php"); ?>
  <body>
    <?php include("./templates/header.php"); ?>

    <main>
        <div class="container">
          <div class="product category">
              <p class="center article">Корзина товаров</p>
              <div class="card">
                <div class="p-flex">
                  <img src="assets/img/jacke.jpeg" alt="tovar">
                  <div class="sub">
                    <p class="center article">Куртка демисезонная Kalo F2</p>

                    <div class="p-flex">
                      <p>Размер: </p>
                      <select class="choose_category">
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                        <option>XXL</option>
                      </select>
                    </div>

                  </div>

                  <div class="sub">
                    <div class="p-flex">
                      <p>Количество:</p>
                      <input class="counter" type="number" step="1" min="1" max="10" value="1">
                    </div>
                    <p class="p-price">1 990 p./шт</p>
                  </div>

                  <i class="fa fa-trash" aria-hidden="true"></i>
              </div>

              </div>
          </div>

          <div class="product category my-order">
            <p class="center article">Итого: </p>
            <p class="p-price">1 990 p.</p>
            <button class="btn info-btn fill">Перейти к оформлению</button>
          </div>
        </div>
    </main>
    <?php include("./templates/footer.php"); ?>
  </body>
</html>