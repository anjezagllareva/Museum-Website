<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="AddNewProductStyle.php">
</head>
<body>
<form action="" method="POST">
    <div>
    <label for="name">Name:</label>
        <input type="text" name="Name" id="name" placeholder = ""> <br><br>
        <label for="author">Author:</label>
        <input type="text" name="Author" id="author" placeholder = ""> <br><br>
        <label for="description">Description:</label>
        <input type="text" name="Description" id="description" placeholder = ""> <br><br>
        <label for="image">Upload Image:</label>
        <input class = "file-upload-input" id="image" name = "Image" type="file"><br><br>
        <label for="price">Price:</label>
        <input type="text"  name="Price" id="price" placeholder = ""> <br><br>
        <label for="publisher">Publisher:</label>
        <input type="text" name="InsertedBy" id="publisher" placeholder = ""> <br><br>
        <input type="submit" name="Save" value="Add Product"> <br><br>
</div>
</form>
<?php include_once '../Controllers/ProductsController.php';?>
</body>
</html>