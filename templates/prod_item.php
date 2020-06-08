<div class="product-card category invis">
  <img src="assets/img/<?php echo($product['image']);?>" alt="tovar">
  <p class="tovar-desc"><?php echo($product['name']);?></p>
  <p class="characters"><?php echo($product['characters']);?></p>
  <p class="characters"><?php echo($product['subcategory']);?></p>
  <p class="price"><?php echo($product['price']);?> ₽<a href="">
      <i class="fa fa-cart-arrow-down r-icon" aria-hidden="true"></i>
  </a></p>
  <button class="btn info-btn" data-goods-id = "<?php echo($product['id']);?>">Подробнее</button>
</div>