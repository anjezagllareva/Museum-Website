<?php

include_once '../Services/ProductService.php';
$Id = $_GET['Id'];
$productService = new ProductService();

$productService->deleteProduct($Id);

header("location:ProductsDashboard.php");
?>