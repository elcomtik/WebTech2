<?php
/**
 * Created by PhpStorm.
 * User: eentox
 * Date: 5/6/17
 * Time: 9:59 PM
 */
include_once 'session.php';
?>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script rel="script" src="assets/jquery/jquery-3.2.1.min.js"></script>
    <script rel="script" src="assets/js/menu.js"></script>
    <script rel="script" src="assets/bootstrap/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/font_awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/footer.css">

    <!--<link rel="stylesheet" href="assets/css/footer_demo.css">-->


<?php
if (in_array("video.php", explode("/", $_SERVER['REQUEST_URI']))) {
    echo "<script rel=\"script\" src=\"assets/js/video.js\"></script>";
}
