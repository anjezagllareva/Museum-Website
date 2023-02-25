<?php
include_once '../Services/ProductService.php';
$productId = $_GET['Id'];

$productService = new ProductService();

$product = $productService->getProductById($productId);

?>
<link rel="stylesheet" href="EditProductStyle.php">
<form action="" method="POST">
        <input type="text" name="Id" value="<?=$product['Id']?>" readonly> <br><br>
        <input type="text" name="Name" value="<?=$product['Name']?>"> <br><br>
        <input type="text" name="Author" value="<?=$product['Author']?>"> <br><br>
        <input type="text" name="Description" value="<?=$product['Description']?>"> <br><br>
        <input type="file" name="Image"><br><br>    
        <input type="text" name="Price" value="<?=$product['Price']?>"> <br><br>
        <input type="submit" name="Save" value="save"> <br><br>
</form>


<?php
if(isset($_POST['Save'])){
    $id = $productId;
    $name = $_POST['Name'];
    $author = $_POST['Author'];
    $description = $_POST['Description'];
    $image = $_POST['Image'];
    $price = $_POST['Price'];
    $insertedBy =$product['InsertedBy'];
    $productService->updateProduct($id,$name,$author,$description,$image,$price,$insertedBy);
    header("location:ProductsDashboard.php");
}
?>