<?php
require 'db_connect.php';
require 'create.php';
require 'delete.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Day3 | Challenge</title>
</head>




<body class="bg-white">
    
    <div class="container">

        <div class="row">
        <?php

        $sql = "SELECT * FROM dishes";
        $result = mysqli_query($connect, $sql);
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

        foreach ($rows as $val) {
            echo '<div class="container  mt-5 col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card bg-white border-0 shadow-sm rounded" >
                        <img src=' . $val["image"] . ' class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5>' . $val["name"] . '</h5>
                            <p class="card-text class="btn text-dark px-0">' . $val["description"] . '<br> ' . $val["price"] . ' € </p>
                         <div = class="border-top">   
                            <a href="index.php?id=' . $val["dishID"] . ' " class="text-dark px-0 text-decoration-none"> Delete </a> 
                         </div>
                        </div>
                    </div>
                </div>';
        }

        ?>
        </div>
    </div>

    <div class="d-flex justify-content-center">

        <form method="post" class="d-flex flex-column justify-content-center flex align-items-center my-5 p-3  bg-warning">
            <input class="p-2 m-2 border rounded-3 shadow-sm bg-white" type="text" name="name" placeholder="name">
            <input class="p-2 m-2 border rounded-3 shadow-sm bg-white" type="url" name="image" placeholder="image URL">
            <input class="p-2 m-2 border rounded-3 shadow-sm bg-white" type="number" name="price" placeholder="price">
            <input class="p-2 m-2 border rounded-3 shadow-sm bg-white" type="text" name="description" placeholder="description">
            <input class="p-2 m-2 bg-secondary border rounded-3 shadow-sm bg-white text_muted" type="submit" name="submit" value="Add dish">
        </form>

    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>

</html>