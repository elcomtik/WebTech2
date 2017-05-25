<?php
/**
 * Created by PhpStorm.
 * User: Sabinka
 * Date: 5/23/2017
 * Time: 1:12 PM
 */
require_once "DB_config.php";
$conn = new mysqli($servername, $username, $password, $db_name);
mysqli_set_charset($conn, "utf8");
$sql = "UPDATE ". $_POST['db'] ." set " . $_POST["column"] . " = '".$_POST["editval"]."' WHERE  id=".$_POST["id"];
$conn->query($sql);
?>