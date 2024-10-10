<?php
include __DIR__ . '/../../autoload.php';

use App\Models\Product;

$id = $_GET['product_id'];
Product::delete($id);
header("location: /");
?>
