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
    <script rel="script" src="assets/js/content.js"></script>
    <title>O nás</title>
</head>

<?php
include_once 'session.php';

if ($_SESSION['lang'] == 'en') {
    header('location: index.php');
}

?>

<body>
<?php
include_once 'menu.php';
?>

<h3 class="mojnadpish3">Ústav automobilovej mechatroniky FEI STU</h3>


<div class="container">
    <h1>O nás</h1>
    <div class="col-lg-3 content-menu">
        <ul>
            <li id="historia" class="active"><p>História</p></li>
            <li id="vedenie"><p>Vedenie ústavu</p></li>
            <li id="oddelenia"><p>Oddelenia</p></li>
        </ul>
    </div>

    <div class="col-lg-9 content">
    </div>
</div>

<?php include_once 'footer.php' ?>

</body>