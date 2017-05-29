<?php

function get_header() {
    echo "        <head>
        <meta charset='UTF-8'> 
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700|Quicksand:400,700' rel='stylesheet'> 
        <link rel='stylesheet' type='text/css' href='style.css'>
        <link href='//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script> 
        <script type='text/javascript' src='scripting.js'></script>
        <title>Multiversum - Producten</title>
    </head>
    <header>
        <div id='logo'>
            <img src='images/logo_header.png'>
        </div>
        <div id='topmenu'>
            <a class='links' href='index.php'>Home</a>
            <a class='links' href='producten.php'>Producten</a>
            <a id='shopping-cart' href='winkelmandje.php'><i class='fa fa-shopping-cart'></i><div id='shopping-cart-counter'>1</div></a>
        </div>
    </header>";
}
