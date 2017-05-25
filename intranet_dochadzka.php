<?php
/**
 * Created by PhpStorm.
 * User: Sabinka
 * Date: 5/18/2017
 * Time: 3:44 PM
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
    <script src=”http://tinymce.cachefly.net/4.0/tinymce.min.js”></script>
    <script src="assets/js/intranet.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel=" stylesheet" type="text/css" href="assets/css/tinytools.toggleswitch.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="assets/js/tinytools.toggleswitch.min.js"></script>

    <script src="assets/js/ajax.js" type="text/javascript"></script>
</head>
<body>
<?php
include_once 'menu.php';
?>
<h1><?php echo $lang['intranet.attendance'] ?></h1>
<?php

require_once "DB_config.php";
include('intranet_dochadzka_functions.php');
$conn = new mysqli($servername, $username, $password, $db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo '<script>console.log("[MySQL] Database connected successfully")</script>';

mysqli_set_charset($conn,"utf8");
mysqli_select_db($conn,"zadanie1");

?>

Date of log: <input type="month" id="month" onchange="sendDate(this.value);">

<select class="form-control sel">
    <option value="0">V práci</option>
    <option value="1" style="background-color: #ffae6c">PN</option>
    <option value="2" style="background-color: #feff85">OČR</option>
    <option value="3" style="background-color: #bdf0a3">Služobná cesta</option>
    <option value="4" style="background-color: #a0d6ff">Dovolenka</option>
    <option value="5" style="background-color: #edaaff">Plán dovolenky</option>
</select>

<div id="edit">
    <input type="checkbox" id="ToggleSwitchSample" />
    <b>Edit mode</b>
</div>
<div id="result"></div>
<div id="buttons">
    <button id="clear">Clear All</button>
    <button id="save" onClick="saveData()">Save</button>
</div>

</body>