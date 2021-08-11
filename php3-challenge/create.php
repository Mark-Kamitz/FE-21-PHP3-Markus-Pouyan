<?php
require_once 'db_connect.php';

if(isset($_POST["submit"])){
    $image = $_POST["image"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $description = $_POST["description"];

    $sql = "INSERT INTO dishes (image,name, price, description) VALUES ('$image','$name','$price','$description')";
    if(mysqli_query($connect, $sql) == true){
    }

}

?>
