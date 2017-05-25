<?php
/**
 * Created by PhpStorm.
 * User: eentox
 * Date: 5/11/17
 * Time: 4:23 PM
 */
include_once 'session.php';
?>

<head>
    <?php
    include_once 'includes.php';
    ?>
</head>
<body>
<?php
include_once 'menu.php';
include_once 'DB_config.php';

if ($_SESSION['lang'] == 'en') {
    header('location: index.php');
}


$conn = new mysqli($servername, $username, $password, $db_name);
$conn->set_charset('utf8');
$result = $conn->query("SELECT * FROM `video_list`");


echo "<div class=\"container-fluid col-lg-3\">";
echo "<table class=\"table table-hover col-lg-12\">";
echo "<thead><th>";
echo $lang['video.video_list'];
echo "</th></thead>";
echo "<tbody>";
while ($row = $result->fetch_assoc()) {
    echo "<tr video_link=" . $row['url'] . "><td>";
    echo $row['name_sk'];
    echo "</td></tr>";
}
echo "</tbody>";
echo "</table></div>";
echo "<div class=\"container-fluid col-lg-9\"><div id=\"player\"></div></div>";
?>
</body>
