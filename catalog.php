<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-panel</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/catalog.css">
</head>
<body>
    <?php include("./sidePanels/adminHeader.php"); ?>
    <div class="catalog-list">
        <?php
        $servername = "localhost";
        $username = "admin";
        $password = "<e[nbR25642789";
        $databasename = "test";

        $conn = new mysqli($servername, $username, $password, $databasename);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = 'SELECT id, name, cost, img FROM catalog';
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $name = $row['name'];
                $cost = $row['cost'];
                $img = $row['img'];
                ?>
                <div class="container">
                    <div class="product" id="product-<?= $id ?>">
                        <img src="<?= $img ?>" alt="<?= $name ?>">
                        <div class="product-title">
                            <?= $name ?>
                        </div>
                        <div class="product-price"><?= $cost ?> RUB</div>
                    </div>
                    <div class="panel">
                        <a href="catalog.php?id=<?= $id ?>">id: <?= $id ?></a>
                        <a href="/base/change.php?id=<?= $id ?>" class="change">Change</a>
                        <button class="delete" onclick="DeleteItemById(<?= $id ?>)">Delete</button>
                    </div>
                </div>
                <?php
            }
        } else {
            echo "0 results";
        }

        $conn->close();
        ?>
    </div>
    <?php
            if (!empty($_GET['id']))
            {
                $getId = $_GET['id'];

                $conn = new mysqli($servername, $username, $password, $databasename);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
        
                $sql = "SELECT * FROM catalog WHERE id='$getId'";
                $result = mysqli_query($conn, $sql);


                $row = mysqli_fetch_assoc($result);

                $name = $row['name'];

                ?>
                    <script src="./js/modalEventListener.js"></script>
                    <link rel="stylesheet" href="./css/product-modal-window.css">
                    <div class="modal-window-background">
                        <div class="modal-window">
                            <a href="catalog.php" class="close" id='close-modal'>&times;</a>
                            <div class="specifications">
                                <img src="<?= $row['img'] ?>" alt="<?= $name ?>">
                                <ul>
                                    <li> id: <?= $getId ?> </li>
                                    <li> Produser: <?= $row['producer'] ?> </li>
                                </ul> 
                            </div>
                            <div class="main-info">
                                <span class="elem-name"><?= $name ?></span>
                                <span class="cost"><?= $row['cost'] ?> R</span>
                                <span class="elem-info"><?= $row['about'] ?></span>
                                <span> keywords: <?= $row['keywords'] ?> </span>
                            </div>
                        </div>
                    </div>
                <?php
            }
        ?>
    <script src="./js/delete.js"></script>
   
</body>
</html>