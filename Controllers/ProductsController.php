<?php
include_once '../Services/ProductService.php';
include_once '../Models/Product.php';

if ($_SERVER['REQUEST_METHOD']==='POST')
{
    if(isset($_POST['Save']))
    {
        $name = $_POST['Name'];
        $author = $_POST['Author'];
        $description = $_POST['Description'];
        $image = $_POST['Image'];
        $price = $_POST['Price'];
        $insertedBy = $_POST['InsertedBy'];

        header("Location:Products.php");

        $product  = new Product($name,$author,$description,$image,$price,$insertedBy);
        $productService = new ProductService();
    
        $productService->createProduct($product);
    }
}
?>