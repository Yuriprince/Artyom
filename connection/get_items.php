<?php
$db = new PDO('mysql:host=localhost:3306;dbname=artyom_magaz;charset=utf8','root','');
$search = $_POST["keyword"];

$sql="SELECT * FROM product WHERE LOCATE('$search', name)";
$result = $db->query($sql);
$products = $result->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($products);
