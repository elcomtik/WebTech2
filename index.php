<?php
/**
 * Created by PhpStorm.
 * User: eentox
 * Date: 5/5/17
 * Time: 7:13 PM
 */
?>

<head>
    <?php include_once 'includes.php'; ?>
    <title>Domov</title>
    <link rel="stylesheet" type="text/css" href="assets/css/slideshow.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<?php
include_once 'session.php';
?>

<body>
<?php
include_once 'menu.php';
?>

<h3 class="mojnadpish3">Ústav automobilovej mechatroniky FEI STU</h3>

<div class="slideshow-container">

    <div class="mySlides fade_slide">
        <div class="numbertext">1 / 3</div>
        <img src="img1.jpg" style="width:100%">
        <div class="text">Caption Text</div>
    </div>

    <div class="mySlides fade_slide">
        <div class="numbertext">2 / 3</div>
        <img src="img2.jpg" style="width:100%">
        <div class="text">Caption Two</div>
    </div>

    <div class="mySlides fade_slide">
        <div class="numbertext">3 / 3</div>
        <img src="img3.jpg" style="width:100%">
        <div class="text">Caption Three</div>
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>

<script src="assets/js/slideshow.js"></script>


<h3 class="mojnadpish3">Čo je to mechatronika</h3>
<div class="row row-no-margin">


    <div class="col-lg-offset-2 col-md-6 col-sm-6 col-xs-12 col-lg-4 col">
        Mechatronika predstavuje inžiniersky odbor, ktorý stojí na rozhraní viacerých oblastí výskumu, vývoja a
        aplikácií. Kombinuje prvky mechaniky, elektroniky, automatizácie a výpočtovej techniky. Typický mechatronický
        systém príjima pomocou rôznych typov senzorov signály z vonkajšieho prostredia,
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 col">
        ktoré spracuje a transformuje na vykonanie potrebnej sily, pohybu alebo iného typu akčného zásahu. Umožňuje rozšírenie mechanického systému o
        senzory a mikropočítače. Mechatronický systém je riadený softvérovým vybavením, ktoré je neoddeliteľnou súčasťou
        produktu a nevyhnutné pre jeho správne fungovanie.
    </div>
</div>


<?php include_once 'footer.php' ?>

</body>