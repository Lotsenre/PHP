<?php
session_save_path("C:\OSPanel\session");
session_start();
?>
<!DOCTYPE html>
<html lang=ru>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/main_style.css">
        <title></title>
    </head>
    <body>
        <?php
        include 'include/header.php'
        ?>
        <main>
            <center>
                <div class="title_content">
                    <h1>Вафли</h1>
                </div>
                </center>
                <div class="burger-menu">
                    <details class="burger-menu_details" name="burger-menu">
                        <summary class="burger-menu_summary">
                            <span
                            class="burger-menu_title"
                            role="term"
                            aria-details="burger-menu"
                            >
                            Категории
                            </span>
                        </summary>
                    </details>
                    <div class="burger-menu_content" id="burger-menu" role="definition">
                        <div class="burger-menu_content-body">
                            <a href="./../index_cakes.php" class="cakes"><p>Торты</p></a>
                            <a href="./../index_pie.php" class="pigori"><p>Пироги</p></a>
                            <a href="./../index_kruasan.php" class="krua"><p>Круассаны</p></a>
                            <a href="./../index_vafli.php" class="vafli"><p>Вафли</p></a>
                        </div>
                    </div>
                </div>
                <div class="products">
                    <a href="card_products/card_product_vafli_klubnika.php">
                        <div class="product-card1">
                            <img src="photo/vafli_klubnika.png" class="product-card1_image" width="290" height="230">
                            <h3 class="product-card1_title">Вафли с клубникой</h3>
                            <span class="product-card1_price">Цена:399 рублей</span>
                        </div>
                    </a>
                    <a href="card_products/card_product_vafli_chernika.php">
                        <div class="product-card2">
                            <img src="photo/pngtree-waffles-with-blueberries-and-bananas-in-french-style-separated-on-white-png-image_12424813-Photoroom.png" class="product-card2_image" width="290" height="230">
                            <h3 class="product-card2_title">Вафли с черникой</h3>
                            <span class="product-card2_price">Цена:339 рублей</span>
                        </div>
                    </a>
                    <a href="card_products/card_product_vafli_med.php">
                        <div class="product-card3">
                            <img src="photo/vafli_s_medom.svg" class="product-card3_image" width="290" height="230">
                            <h3 class="product-card3_title">Вафли с мёдом</h3>
                            <span class="product-card3_price">Цена:359 рублей</span>
                        </div>
                    </a>
                </div>
        </main>
        <?php
        include 'include/footer.php'
        ?>
    </body>
</html>