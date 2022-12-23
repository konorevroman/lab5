<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-panel</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/change.css">
</head>
<body>
    <?php 
    include("../sidePanels/adminHeader.php"); 
    
    if (!empty($_GET['id']))
    {
        $getId = $_GET['id'];
        
        $servername = "localhost";
        $username = "admin";
        $password = "<e[nbR25642789";
        $databasename = "beauty-market";


        $conn = new mysqli($servername, $username, $password, $databasename);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        mysqli_set_charset($conn, 'utf8');

        $sql = "SELECT * FROM catalog WHERE id='$getId'";
        $result = mysqli_query($conn, $sql);


        $row = mysqli_fetch_assoc($result);

        $name = $row['name'];
        $info = $row['about'];
        $cost = $row['cost'];
        $producer = $row['producer'];
        $keywords = $row['keywords'];
        $img = $row['img'];


        function addFile($row){
            if ($_FILES["item_img"]['name']) {
                $uploaddir = "/uploads/catalog-img/";
                $item_img = $_FILES["item_img"]['name'];
                move_uploaded_file($_FILES['item_img']['tmp_name'], '..' . $uploaddir . $item_img);
                $img_link = $uploaddir . $item_img;
                if(($uploaddir . $item_img )!= $uploaddir && $row['img'] != $img_link){
                    if ($row['img'] != '') {unlink('..' . $row['img']);}
                    return $img_link;
                }
                
            }
            return false;
        }

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['item_name'];
            $cost = $_POST["cost"];
            $info = $_POST["info"];
            $producer = $_POST["item-producer"];
            $keywords = $_POST["item-keywords"];
            $temp_img = addFile($row);
            if($temp_img){
                $img = $temp_img;
            }
            $sql = "UPDATE catalog 
            SET name = '$name', cost = '$cost', about = '$info', img = '$img', producer = '$producer', keywords = '$keywords'
            WHERE id='$getId'";

            if ($conn->query($sql) === TRUE) {
                ?><script>alert("Товар успешно обновлён")</script><?php
            } else {
                echo "Error updating record: " . $conn->error;
                return;
            }
        }

        $conn->close();


        ?>
        <form action="change.php?id=<?= $getId ?>" method="post" enctype="multipart/form-data"> 
            <div class="modal-window">
                <a href="../catalog.php" class="close" id='close-modal'>&times;</a>
                <div class="specifications">
                    <img src="../<?= $img ?>" alt="<?= $name ?>">
                    <ul>
                        <li><div class="img"><input type="file" calss="item-img" name="item_img"></div></br></li>
                        <li> id: <?= $getId ?> </li>
                        <li> <input type="text" name="item-producer" placeholder="Производитель" value="<?=$producer?>"> </li>
                    </ul> 
                </div>
                <div class="main-info">
                    <input type="text" class="required-field" name="item_name" placeholder="Название товара" value="<?=$name?>">
                    <div><input type="text" class="required-field" name="cost" placeholder="Цена" value="<?=$cost?>"><p>₽</p></div>
                    <textarea name="info" id="" cols="30" rows="10" placeholder="Описание"><?=$info?></textarea>
                    <input type="text" name="item-keywords" placeholder="Ключевые слова" value='<?= $keywords ?>'>
                </div>
            </div>
            <input type="submit" class="enter" value="Обновить">
        </form>
        <!-- <script src="../js/create.js"></script>     -->
        <?php
    } 

    else {
        ?><script>alert("Product is not found. Please, check the ID");</script><?php 
    }
    ?>
    
</body>
</html>