<?php 
$sql="SELECT * FROM product";
$result = $db->query($sql);
$products = $result->fetchAll(PDO::FETCH_ASSOC);
?>