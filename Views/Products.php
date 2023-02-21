<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Museum</title>
    <link rel="stylesheet" href="ProductsStyle.php">
</head>
<body>
  <header><a href="HomeUser.php">MuseumEX</a></header>
<div class="navbar">
    <a href="HomeUser.php">HOME</a>
    <a href="Products.php">PRODUCTS</a>
    <div class="dropdown">
      <button class="dropbtn">MUSEUMS
      </button>
      <div class="dropdown-content">
        <a href="Louvre.php">Louvre Museum</a>
        <a href="Uffizi.php">Uffizi Gallery</a>
        <a href="BM.php">The British Museum</a>
        <a href="MMA.php">The Museum of Modern Art</a>
      </div>
  </div>
    <a href="Contact.php">CONTACT US</a> 
    <a href="AboutUs.php">ABOUT US</a> 
    <a href="Logout.php">LOGOUT</a> 
    </div>
    
    <div class = "header">
      <h1>Products</h1>
    </div>
    <button type="submit" id="button" class="btn" name ="addProduct"
                onclick="location.href = 'AddNewProduct.php'">Add New Product</button>
                <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Author</th>
            <th>Description</th>
            <th>Image</th>
            <th>Price</th>
        </tr>
        <?php
        include_once '../Services/ProductService.php';
        $productsService  = new ProductService();
        $products = $productsService->getAllProducts();
        foreach($products as $product){
           echo 
           "
           <tr>
               <td>$product[Id]</td>
               <td>$product[Name]</td>
               <td>$product[Author]</td>
               <td>$product[Description]</td>
               <td><img src='Images/$product[Image]' width = 100px> </td>
               <td>$product[Price]</td>
           </tr>
           ";
        }
        ?>
    </body>
    </html>