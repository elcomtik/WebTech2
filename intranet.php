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
?>

<head>
    <?php
    include_once 'includes.php';
    ?>
</head>
<body>
<?php
include_once 'menu.php';
?>
</body>
