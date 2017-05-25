<?php
/**
 * Created by PhpStorm.
 * User: eentox
 * Date: 5/8/17
 * Time: 10:16 PM
 */
include_once 'session.php';
if (!isset($_SESSION['name'])) {
    header('location: index.php');
}
if ($_SESSION['lang'] == 'en') {
    header('location: index.php');
}
?>

<head>
    <?php
    include_once 'includes.php';
    ?>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<?php
include_once 'menu.php';
?>

<!-- Use any element to open the sidenav -->
<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
<div id="main">
    <h1>Vitajte v intranete!</h1>
</div>
</body>
