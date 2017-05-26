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
    <title>Elektrická motokára</title>
</head>
<body>
<?php
include_once 'menu.php';
?>

<div class="container">
    <img src="uploads/research/motokara.jpg" width="100%">
</div>

<?php include_once 'footer.php' ?>

</body>