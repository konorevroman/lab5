<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>beauty-market</title>
    
    <!-- link styles -->
    <link rel="stylesheet" href="./css/reset.css"/>
    <link rel="stylesheet" href="./css/base.css"/>
    <link rel="stylesheet" href="./css/main.css"/>
    <link rel="stylesheet" href="./css/catalog-side-bar.css">
    
    <!-- link main fonts -->
    <link rel="stylesheet" href="./css/fonts/BebasNeue/stylesheet.css">
</head>
<body>
    <div class="main-frame">

        <div class="main-header">
            <img src="./img/Logo.png" class="main-header-logo" alt="Logo">
            <div class="menu-search-and-account">
                <div class="header-account">
                    <ul>
                        <li class="nonvisible">
                            <button class="search-button"><img src="./img/icons/search.png" alt="search" class="header-icons"></button>
                        </li>
                        <li>
                            <a href="#"><img src="./img/icons/person.png" alt="person" class="header-icons"></a>
                            <div class="counter">1</div>
                        </li>
                        <li>
                            <a href="#"><img src="./img/icons/panier.png" alt="panier" class="header-icons"></a>
                            <div class="counter">1</div>
                        </li>
                    </ul>                        
                </div>
                <div class="header-search">
                    <form action="#" id="search-form">
                        <input type="search" name="query" placeholder="Поиск">                            
                    </form>
                    <button class="search-button" form="search-form">
                        <img src="./img/icons/search.png" alt="search">
                    </button>
                </div>
            </div>
        </div>

        <div class="main-top-menu">
            <button id="menu-tabs-button" data-changetext="Скрыть меню" data-visible=0>
                <div> Показать меню</div>
                <div class="menu-line-text-bottom"></div>
            </button>
            <div class="menu-tabs">
                <a href="#">Каталог</a>
                <a href="#">Бренды</a>
                <a href="#">Акции</a>
                <a href="#">О компании</a>
                <a href="#">Вакансии</a>
            </div>
        </div>
        

        <div class="main-banner">
            <div class="main-banner-photo">
                <img src="./img/main-baner.jpg" alt="FirstShoot">
                <div class="text-in-banner">
                    <div class="h">Lorem ipsum dolor sit ame</div>
                    <div class="p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                </div>                
            </div>
        </div>

        <div class="catalog">
            <div class="catalog-main-menu">
                <a href="#">
                    <div>Новинки</div>
                    <div class="menu-line-text-bottom"></div>
                </a>
                <a href="#">
                    <div>Парфюмерия</div>
                    <div class="menu-line-text-bottom"></div>
                </a>
                <a href="#">
                    <div>Косметика</div>
                    <div class="menu-line-text-bottom"></div>
                </a>
                <a href="#">
                    <div>Уход</div>
                    <div class="menu-line-text-bottom"></div>
                </a>
                <a href="#">
                    <div>Окрашивание</div>
                    <div class="menu-line-text-bottom"></div>
                </a>
            </div>
            <div class="catalog-main-content">
                <button class="filter">
                    <div class="text">Фильтры</div>
                </button>
                <ul class="catalog-side-bar">
                    <li id="filters-cost">
                        <button class="filter">
                            <div class="text">Цена</div>
                            <div class="filter-icon">
                                <div class="stick1-container">
                                    <div class="stick1"></div>
                                </div>
                                <div class="stick2-container">
                                    <div class="stick2"></div>
                                </div>
                            </div>
                        </button>
                        <ul>
                            <li><a href="">some link</a></li>
                            <li><a href="">some link</a></li>
                        </ul>
                    </li>
                    <li id="filters-availability">
                        <button class="filter">
                            <div class="text">В наличии</div>
                            <div class="filter-icon">
                                <div class="stick1-container">
                                    <div class="stick1"></div>
                                </div>
                                <div class="stick2-container">
                                    <div class="stick2"></div>
                                </div>
                            </div>
                        </button>
                        <ul>
                            <li><a href="">some link</a></li>
                            <li><a href="">some link</a></li>
                        </ul>
                    </li>     
                    <li id="filters-brands">
                        <button class="filter">
                            <div class="text">Бренды</div>
                            <div class="filter-icon">
                                <div class="stick1-container">
                                    <div class="stick1"></div>
                                </div>
                                <div class="stick2-container">
                                    <div class="stick2"></div>
                                </div>
                            </div>
                        </button>
                        <ul>
                            <li><a href="">some link</a></li>
                            <li><a href="">some link</a></li>
                        </ul>
                    </li>               
                    <li id="filters-for">
                        <button class="filter">
                            <div class="text">Для кого</div>
                            <div class="filter-icon">
                                <div class="stick1-container">
                                    <div class="stick1"></div>
                                </div>
                                <div class="stick2-container">
                                    <div class="stick2"></div>
                                </div>
                            </div>
                        </button>
                        <ul>
                            <li><a href="">some link</a></li>
                            <li><a href="">some link</a></li>
                        </ul>
                    </li>
                    <li id="filters-1">
                        <button class="filter">
                            <div class="text">Куда</div>
                            <div class="filter-icon">
                                <div class="stick1-container">
                                    <div class="stick1"></div>
                                </div>
                                <div class="stick2-container">
                                    <div class="stick2"></div>
                                </div>
                            </div>
                        </button>
                        <ul>
                            <li><a href="">some link</a></li>
                            <li><a href="">some link</a></li>
                        </ul>
                    </li>    
                </ul>
                <div class="catalog-list">
                    <?php

                    $servername = "localhost";
                    $username = "admin";
                    $password = "<e[nbR25642789";
                    $databasename = "beauty-market";


                    $conn = new mysqli($servername, $username, $password, $databasename);
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = 'SELECT * FROM catalog';
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                            $name = $row['name'];
                            $cost = $row['cost'];
                            $img = $row['img'];
                            ?>
                                <div onclick="productClicked(<?= $id ?>)" class="product">
                                    <img src="<?= $img ?>" alt="<?= $name ?>">
                                    <div class="product-title">
                                        <?= $name ?>
                                    </div>
                                    <div class="product-price"><?= $cost ?> RUB</div>
                                </div>
                            <?php
                        }
                        include('product-modal.php');
                    }   
                    else {
                        echo "0 results";
                    }

                    $conn->close();
                    ?>
                </div>
            </div>
        </div>

        <link rel="stylesheet" href="css/banners-in-bottom.css">

        <div class="promo">
            <div class="banner-1">
                <div>Felis donec et odio pellentesque</div>
                <div class="hover-banner">
                    <img src="./img/photos/BROCARD_1.jpg" alt="BROCARD">
                    <div class="hover-text">Lorem ipsum dolor sit amet</div>
                </div>
                
            </div>
            <div class="banner-2">
                <div class="hover-banner">
                    <img src="./img/girl.jpg" alt="">
                    <div class="hover-text">Lorem ipsum dolor sit amet</div>
                </div>
                
            </div>
            <div class="banner-3">
                
                <div class="hover-banner">
                    <img src="./img/photos/ElizabethArden.jpg" alt="">
                    <div class="hover-text">Lorem ipsum dolor sit amet</div>
                </div>
                <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sagittis purus sit amet volutpat consequat mauris nunc congue. Enim tortor at auctor urna nunc id. Condimentum mattis pellentesque id nibh. Eget mi proin sed libero enim sed faucibus turpis in.</div>
            </div>
        </div>

        <div class="footer">
            <ul>
                <li><a href="#">item</a></li>
                <li><a href="#">item</a></li>
                <li><a href="#">item</a></li>
                <li><a href="#">item</a></li>
                <li><a href="#">item</a></li>
            </ul>
        </div>
        
        <script src="./js/moreBtn.js"></script>
        <script src="./js/productModal.js"></script>
</body>
</html>