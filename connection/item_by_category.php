<?php
$db = new PDO('mysql:host=localhost:3306;dbname=artyom_magaz;charset=utf8','root','');
$subcategory = $_POST["subcategory"];

$sql="SELECT * FROM product WHERE subcategory='$subcategory'";
$result = $db->query($sql);
$product = $result->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($product);