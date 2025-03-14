<?php
    $connection;
    try{
        $connection = new PDO("mysql:host=127.0.0.1;dbname=product_manager","root","");
        $connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo" Connect seccesfully"; 
    } catch (PDOException $e) {
        echo" Connection failed: ".$e -> getMessage();
        $connection = null;
    }
?>    