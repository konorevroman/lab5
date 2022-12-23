<?php

    $servername = "localhost";
    $username = "admin";
    $password = "<e[nbR25642789";
    $databasename = "beauty-market";


    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(!checking()){
            ?><script>alert("Ошибка: товар уже существует.")</script><?php
        }
        else{
            addItem();
        }
        
    }

    function checking(){
        global $servername, $username, $password, $databasename;
        $conn = new mysqli($servername, $username, $password, $databasename);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $name = $_POST['item_name'];
        $sql = "SELECT name FROM catalog WHERE name='$name'";
        // $isset = ($conn->query($sql) === TRUE);
        $result = $conn->query($sql);
        $conn->close();
        if ($result->num_rows == 0) {
            return true;
        }
        return false;
    }


    function addItem()
    {
        $item_name = $_POST["item_name"];
        $item_cost = $_POST["cost"];
        $item_info = $_POST["info"];
        $item_producer = $_POST["item-producer"];
        $item_keywords = $_POST["item-keywords"];

        global $servername, $username, $password, $databasename;
        $conn = new mysqli($servername, $username, $password, $databasename);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "INSERT INTO catalog (name, cost, about, keywords, producer)
        VALUES ('$item_name', '$item_cost', '$item_info', '$item_keywords', '$item_producer')";

        if ($conn->query($sql) === TRUE) {
            $item_id = $conn->insert_id;
            ?><script>alert("Товар успешно добавлен")</script><?php
        } else {
            echo "Error updating record: " . $conn->error;
            return;
        }

        $uploaddir = "uploads/catalog-img/";
        $item_img = $_FILES["item_img"]['name'];
        $img = $uploaddir . $item_img;
        if ($img != $uploaddir){
            move_uploaded_file($_FILES['item_img']['tmp_name'], $uploaddir . $item_img);
            $sql = "UPDATE catalog SET img='$img' WHERE id='$item_id'";
            if ($conn->query($sql) === FALSE) {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        $conn->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-panel</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/create-item.css">
</head>
<body>
    <?php include("./sidePanels/adminHeader.php"); ?>
    <div class="main">
        <div class="catalog-add-form">
            <p>Введите данные товара</p>
            <form id="post-element" action="create.php" method="post" enctype="multipart/form-data">
                <input type="text" class="required-field" name="item_name" placeholder="Название товара">
                <div><input type="text" class="required-field" name="cost" placeholder="Цена"><p>₽</p></div>
                <textarea name="info" id="" cols="30" rows="10" placeholder="Описание"></textarea>
                <div class="img">Загрузите изображение товара:<br><input type="file" name="item_img"></div></br>
                <input type="text" name="item-producer" placeholder="Производитель">
                Ключевые слова (через запятую)
                <input type="text" name="item-keywords" placeholder="Ключевые слова">
                <input type="submit" class="enter" value="Создать" disabled>
            </form>
            <?php
                function exist(){
                    echo("Ошибка: товар уже существует.");
                }
            ?>
        </div>
    </div>
    
    <script src="./js/create.js"></script>
</body>
</html>