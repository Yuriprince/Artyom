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
                  $db = new PDO('mysql:host=localhost:3306;dbname=artyom_magaz;charset=utf8','root','');
                  $sql="SELECT * FROM product";
                  $result = $db->query($sql);
                  $products = $result->fetchAll(PDO::FETCH_ASSOC);

                  foreach ($products as $product) {
                    include("./templates/prod_item.php");
                  }
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
<script src="scripts/search_prepare.js"></script>