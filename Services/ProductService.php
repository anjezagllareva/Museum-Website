<?php 
include_once '../Database/DatabaseConnection.php';

class ProductService{
    private $connection;

    function __construct()
    {
        $databaseConnection = new DatabaseConnection;
        $this->connection = $databaseConnection->startConnection();
    }

    function createProduct($product)
    {
        $databaseConnection = $this->connection;
        $name = $product->getProductName();
        $author = $product->getProductAuthor();
        $description = $product->getProductDescription();
        $image = $product->getProductImage();
        $price = $product->getProductPrice();
        $insertedBy = $product->getProductInsertedBy();

        $sql = "INSERT INTO products (Name, Author, Description, Image, Price, InsertedBy) VALUES (?,?,?,?,?,?)";

        $statement = $databaseConnection->prepare($sql);

        $statement->execute([$name,$author,$description,$image,$price,$insertedBy]);
        echo "<script> alert('Product '$name' has been inserted successfuly!'); </script>";
    }

    function getAllProducts(){
        $databaseConnection = $this->connection;

        $sql = "SELECT * FROM products";

        $statement = $databaseConnection->query($sql);
        $products = $statement->fetchAll();

        return $products;
    }
    
    function getProductById($Id){
        $databaseConnection = $this->connection;

        $sql = "SELECT * FROM products WHERE id='$Id'";

        $statement = $databaseConnection->query($sql);
        $product = $statement->fetch();

        return $product;
    }

    function updateProduct($id,$name,$author,$description,$image,$price,$insertedBy){

        $databaseConnection = $this->connection;

        $sql = "UPDATE products SET Id=?, Name=?, Author=?, Description=?, Image=?, Price=?, InsertedBy=? WHERE id=$id";

        $statement = $databaseConnection->prepare($sql);

        $statement->execute([$id,$name,$author,$description,$image,$price,$insertedBy]);

        echo "<script>alert('update was successful'); </script>";
   } 

   function deleteProduct($Id){
    
        $databaseConnection = $this->connection;

        $sql = "DELETE FROM products WHERE Id=?";

        $statement = $databaseConnection->prepare($sql);

        $statement->execute([$Id]);

        echo "<script>alert('delete was successful'); </script>";
    } 
}
?>