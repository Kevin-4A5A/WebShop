<!DOCTYPE html>
<html>

    <body>
        <?php require("header.php");
        get_header();
        ?>
        <div class="row">
            <div id="container">
                <h1>Producten</h1>
                <ul>
                    <?php
                    $backgroundimage = array("images/product.png", "images/logo_header.png");
                    foreach ($backgroundimage as $product) {
                        echo "<li><div class='product-container'><div class='product-header' style='background-image: url(" . $product . ")'></div><div class='post-entry'><div class='post-title'><strong>Lorem ipsum</strong></div>Prijs: 500 euro<br><button>Bestellen</button></div></div></li>";
                    }
                    ?>
    <!--                <li><div class="product-container"><img src="images/product.png"><div class="post-entry"><div class="post-title"><strong>Lorem ipsum</strong></div>Prijs: 500 euro<br><button>Bestellen</button></div></div></li>-->
                </ul>
            </div>
        </div>
        <div class="footer">
            <ul>
                <h2>contact</h2>
                <li>lorem ipsum</li>
                <li>lorem ipsum</li>
                <li>lorem ipsum</li>
                <li>lorem ipsum</li>
            </ul>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2434.1786000329107!2d4.8863633161185565!3d52.40343925261292!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c6083b4f67bd2b%3A0xd545c4c86c7d7513!2sTweakers!5e0!3m2!1snl!2snl!4v1495966804144" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </body>
</html>
