<?php
            if (!empty($_GET['id']))
            {
                $getId = $_GET['id'];
        
                $servername = "localhost";
                $username = "admin";
                $password = "<e[nbR25642789";
                $databasename = "test";


                $conn = new mysqli($servername, $username, $password, $databasename);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM catalog WHERE id='$getId'";
                $result = mysqli_query($conn, $sql);


                $row = mysqli_fetch_assoc($result);

                $name = $row['name'];
                $info = $row['about'];
                $cost = $row['cost'];
                $producer = $row['producer'];
                $keywords = $row['keywords'];
                $img = $row['img'];
                ?>
                    <script src="./js/modalEventListener.js"></script>
                    <link rel="stylesheet" href="./css/product-modal-window.css">
                    <div class="modal-window-background">
                        <div class="modal-window">
                            <div onclick="closeModal()" class="close" id='close-modal'>&times;</div>
                            <div class="specifications">
                                <img src="<?= $img ?>" alt="<?= $name ?>">
                                <ul>
                                    <li> id: <?= $getId ?> </li>
                                    <li> Produser: <?= $producer ?> </li>
                                </ul> 
                            </div>
                            <div class="main-info">
                                <span class="elem-name"><?= $name ?></span>
                                <span class="cost"><?= $cost ?> R</span>
                                <span class="elem-info"><?= $info ?></span>
                                <span> keywords: <?= $keywords ?> </span>
                            </div>
                        </div>
                    </div>
                <?php
            }
        ?>