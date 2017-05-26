<?php
/**
 * Created by PhpStorm.
 * User: rdanko
 * Date: 26.5.2017
 * Time: 21:50
 */

include_once 'session.php';
if ($_SESSION['lang'] == 'en') {
    header('location: index.php');
}
?>

<head>
    <?php include_once 'includes.php'; ?>
    <script rel="script" src="assets/js/content.js"></script>
    <title>Autonómne vozidlo</title>
</head>
<body>
<?php
include_once 'menu.php';
?>

<div class="container">
    <img src="uploads/research/car.jpg" align="left" width="400px">
    <br>
    <h4>Technické údaje</h4><br>
    Hmotnosť: 12,5kg<br>
    Rozmery (d x š x v): 614 x 495 x 269 mm<br>
    Spôsob ovládania: Diaľkové ovládanie, riadené mikroprocesorom<br>
    Pohon: 6×6, každé koleso samostatne riadené BLDC elektromotorom<br>
    Celkový výkon elektromotorov: 6x 175W<br>
    Napájanie motorov: 6x DC/​AC menič<br>
    Zdroj el. prúdu: 4x Li-​Pol akumulátory<br>
    Celková kapacita akumulátorov: 13,2 Ah<br>
</div>

<?php include_once 'footer.php' ?>

</body>