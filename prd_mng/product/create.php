<?php
    include'../config/db_connect.php';
    if(isset($_POST['submit'])){
        try{
        $name =$_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $sql = "INSERT INTO product(name, price, description) VAlUES(:name,:price,:description) VALUES(:name, :price,:description)";
        $statement =$connection -> prepare($sql);
        $statement-> bindParam(':name', $name);
        $statement ->bindParam(':price',$price);
        $statement -> bindParam(':description',$description);
        $statement -> execute();
        }catch (PDOException $e)
        {
            echo"Error:".$e->getMessage();
        
        }
    }
?>
<h1>Product</h1>
<form method="POST" action="create.php">
    <label for="name">Name</label>
    <input type="text" name="name" id="name">
    <br>
    <label for="price">Price</label>
    <input type="text" name="price" id="price">
    <br>
    <label for="description">Description</label>
    <input type="text" name="description" id="desciption">

    <br>
    <input type="submit" value="submit" name="submit">
</form>