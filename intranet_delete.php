<?php
/**
 * Created by PhpStorm.
 * User: Sabinka
 * Date: 5/25/2017
 * Time: 12:31 AM
 */
require_once "DB_config.php";
$conn = new mysqli($servername, $username, $password, $db_name);
mysqli_set_charset($conn, "utf8");
echo $sql;
$sql = "DELETE FROM `". $_POST['db'] ."` WHERE `ID`=" . $_POST["id"];
$conn->query($sql);
?>