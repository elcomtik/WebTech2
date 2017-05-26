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
if (!$_SESSION['admin'] && !$_SESSION['hr']) {
    header('location: index.php');
}

include_once 'DB_config.php';

$conn = new mysqli($servername, $username, $password, $db_name);
$conn->set_charset('utf8');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['action'])) {
    if ($_POST['action'] == 'delete_video') {
        $video_id = $_POST['video_url'];
        $conn->query("DELETE FROM `video_list` WHERE `url` ='$video_id'");
        $result = 'ok';
        echo json_encode($result);
    }
    if ($_POST['action'] == 'add_video') {
        $video_id = $_POST['video_id'];
        $name = $_POST['name'];
        $result = $conn->query("INSERT INTO `video_list` (`name_sk`, `url`) VALUES ('$name', '$video_id');");

        echo json_encode([$result, $name, $video_id]);
    }
}
else {
    echo "<head>";
    echo "<title>Video managment</title>";
    echo "<script rel=\"script\" src=\"assets/js/video_managment.js\"></script>";
    include_once 'includes.php';
    echo "</head>";
    echo "<body>";
    include_once 'menu.php';
    $result = $conn->query("SELECT * FROM `video_list`");
    echo "<div class='col-lg-8 col-md-offset-2'>";
    echo "<div class=\"panel panel-default\">";
    echo "<div class=\"panel-heading\">";
    echo "<h3 class=\"panel-title\">Add Video</h3></div>";
    echo "<div class=\"panel-body\">";
    echo "<form><div class=\"form-group\">";
    echo "<label for=\"Video_name\">Názov videa</label>";
    echo "<input class=\"form-control\" id=\"video_name\" placeholder=\"Názov videa\">";
    echo "</div><div class=\"form-group\">";
    echo "<label for=\"video_id\">ID kód videa</label>";
    echo "<input class=\"form-control\" id=\"video_id\" placeholder=\"xrF6L3Uc1Ik\">";
    echo "</div>";
    echo "<button type=\"button\" class=\"btn btn-default btn-block\" onclick=\"AddVideo()\">Pridať</button>";
    echo "</form>";
    echo "</div></div></div>";
    if ($result->num_rows) {
        echo "<div class=\"container-fluid col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12\">";
        echo "<table class=\"table table-striped\">";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Názov videa</th>";
        echo "<th>Video id</th>";
        echo "<th class='text-center'>Zmazať video</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['name_sk'] . "</td>";
            echo "<td>" . $row['url'] . "</td>";
            echo "<td class='text-center' onclick='DeleteVideo()'><span class='glyphicon glyphicon-remove'></span></td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        echo "</div>";
    }
    echo "</body>";
}


?>
