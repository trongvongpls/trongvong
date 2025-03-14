<?php
include '../config/db_connect.php';
?>
<h1>Danh sách sản phẩm</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
    <?php
    $sql = "SELECT * FROM product";
    $statement = $connection->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    if ($result == null) {
        echo "<tr><td colspan='5' class='text-center'>No data found</td></tr>";
    } else {
        foreach ($result as $item) {
            echo "<tr>"
                 ."<td>".$item['id']."</td>"
                 ."<td>".$item['name']."</td>"
                 ."<td>".$item['price']."</td>"
                 ."<td>".$item['description']."</td>"
                 ."<td>"
                 ."<a href='index.php?page=edit_product&id=".$item['id']."'>Edit</a> | "
                 ."<a href='index.php?page=delete_product&id=".$item['id']."'>Delete</a>"
                 ."</td>"
                 ."</tr>";
        }
    }
    ?>
    </table>