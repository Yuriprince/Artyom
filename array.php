<?php
require('connection/config.php');
$sql="SELECT * FROM product";
$result = $db->query($sql);
$products = $result->fetchAll(PDO::FETCH_ASSOC);

foreach($products as $product) {
  echo("<ul>");
  foreach($product as $key => $item) {
          echo ("<li>$key=>$item</li>");
  }
  echo("</ul>");
}