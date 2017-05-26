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
<h1><?php echo $lang['navbar.staff'] ?></h1>
<table class="table" data-sorting="true" data-filtering="true">
    <thead>
        <tr>
            <th><?php echo $lang['staff.name'] ?></th>
            <th><?php echo $lang['staff.room'] ?></th>
            <th><?php echo $lang['staff.number'] ?></th>
            <th><?php echo $lang['staff.department'] ?></th>
            <th><?php echo $lang['staff.classification'] ?></th>
            <th><?php echo $lang['staff.function'] ?></th>
        </tr>
    </thead>
    <tbody>
    <?php
    require_once "DB_config.php";
    require_once "Staff.php";
    $conn = new mysqli($servername, $username, $password, $db_name);
    mysqli_set_charset($conn, "utf8");
    $sql = "SELECT ID, NAME, ROOM, NUMBER, DEPARTMENT, CLASSIFICATION, FUNCTION, AIS_ID FROM STAFF";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td><a href='pracovnici_detail.php?id=" . $row['ID'] . "&aisid=" . $row['AIS_ID'] . "' class='btn btn-link'>" . $row['NAME'] . "</a></td>";
            echo "<td>" . $row['ROOM'] . "</td>";
            echo "<td>" . $row['NUMBER'] . "</td>";
            echo "<td>" . $row['DEPARTMENT'] . "</td>";
            echo "<td>" . $row['CLASSIFICATION'] . "</td>";
            echo "<td>" . $row['FUNCTION'] . "</td>";
            echo "</tr>";
        }
    }
    ?>
    </tbody>
</table>
</div>
<?php include_once 'footer.php' ?>
</body>