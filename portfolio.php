<?php

$db = new PDO("mysql:host=192.168.20.20;dbname=Exercise2", 'root', '');
$db -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


?>


<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Portfolio Liliya Voevodina</title>
        <link href="css/normalize.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="css/stylesheet.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="hometop portfolio-hometop">
            <nav>
                <img class="mypicture portfolio-picture" src="images/IMG_8373.JPG" alt="Liliya">
                <a href="contacts.html">Contacts</a>
                <a href="portfolio.php">Portfolio</a>
                <a href="aboutme.html">About me</a>
                <a href="index.html">Home</a>
            </nav>
            <div class="works">
                <h3>
                    Let me please introduce you my works.
                </h3>
                    <img class="demo" src="images/lamp1.png" alt="lamps">
                    <img class="demo" src="images/lamp2.png" alt="lamps">
                    <img class="demo" src="images/lamp3.png" alt="lamps">
            </div>
        </div>
        <div class="homecenter">
            <img class="arrows aboutme-arrows" src="images/arrow-img.png" alt="Arrows">
            <div class="social contacts-social portfolio-social">
                <a href="https://www.facebook.com/lilkalolkaN1"><i class="fa fa-facebook-square"></i></a>
                <a href="https://github.com/Liliya-V"><i class="fa fa-github-square"></i></a>
                <a href="https://www.linkedin.com/feed/"><i class="fa fa-linkedin-square"></i></a>
            </div>
        </div>
    </body>
</html>


