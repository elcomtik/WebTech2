<?php
/**
 * Created by PhpStorm.
 * User: Sabinka
 * Date: 5/23/2017
 * Time: 2:11 PM
 */
include_once 'session.php';
?>

<head>
    <?php
    include_once 'includes.php';
    ?>
    <script src="assets/js/intranet.js"></script>
    <script src="assets/js/footable.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/footable.bootstrap.css">
</head>
<body>
<?php
include_once 'menu.php';
?>
<h1><?php echo $lang['staff.detail'] ?></h1>
<table class="table">
    <thead>
    <tr>

    </tr>
    </thead>
    <tbody>
    <?php
    $id = $_GET['id'];
    require_once "DB_config.php";
    require_once "Staff.php";
    $conn = new mysqli($servername, $username, $password, $db_name);
    mysqli_set_charset($conn, "utf8");
    $sql = "SELECT ID, CLASSIFICATION, DEPARTMENT, NUMBER, ROOM, AIS_ID FROM STAFF WHERE ID='" . $id . "'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $staff = array();
        while ($row = $result->fetch_assoc()) {
            $staff[] = new Staff($row["ID"], $row['CLASSIFICATION'], $row['DEPARTMENT'], '+421 2 60291 ' . $row['NUMBER'], $row['ROOM'], $row['AIS_ID']);
            echo "<tr>";
            //echo "<td><img src='https://is.stuba.sk/auth/lide/foto.pl?id=" . $row['AIS_ID'] . "'></td>";
            echo "<td><img height='150px' src='uploads/staff_photo/" .$row['AIS_ID']. ".jpg'></td>";
            echo "<td>" . $row['CLASSIFICATION'] . "</td>";
            echo "<td>" . $row['DEPARTMENT'] . "</td>";
            echo "<td>+421 2 60291 " . $row['NUMBER'] . "</td>";
            echo "<td>" . $row['ROOM'] . "</td>";
            echo "</tr>";
        }
    }
    ?>
    </tbody>
</table>
<?php include "pracovnici_detail_curl.php"; ?>

</body>