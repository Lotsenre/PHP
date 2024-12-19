<?php
session_save_path("C:\OSPanel\session");
session_start();
?>
<!DOCTYPE html>
<html lang=ru>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./../css/card_product_style.css">
        <title></title>
    </head>
    <body>
        <?php
        include './../include/header.php'
        ?>
        <main>
            <div class="card_product">
            <div class="card_image">
                <img src="./../photo/Круассан-мини-Венуазин-25гр-Delifrance.png" class="image">
            </div>
            <div class="card_info">
            <div class="card_title">
                <h2>Круассан без начинки</h2>
            </div>
            <div class="card_opisanie">
                <details>
                    <summary>Описание:</summary>
                    <section class="card_opisanie_body"><p>Данный круассан послужит отличной базой для приготовления круассана со своей любимой начинкой</p></section>
                </details>
            </div>
            <div class="card_price">
                <section>Цена:299 рублей</section>
            </div>
            <a href='cart.php?action=add&id=12'>
            <div class="card_buy">
                <p>Добаить в корзину</p>
            </div>
            </a>
            <div class="favorite">
                <a href="favorite.php?action=add&id=12">
                    <img src="./../photo/favorite.svg" width="50px" height="50px">
                </a>
            </div>
            </div>
            </div>
        </main>
        <?php
        include './../include/footer.php'
        ?>
    </body>
</html>