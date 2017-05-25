<?php
/**
 * Created by PhpStorm.
 * User: Sabinka
 * Date: 5/18/2017
 * Time: 3:41 PM
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
</head>
<body>
<?php
include_once 'menu.php';
?>
<h1><?php echo $lang['intranet.purchases'] ?></h1>

    <?php
    require_once "DB_config.php";
    $conn = new mysqli($servername, $username, $password, $db_name);
    mysqli_set_charset($conn, "utf8");
    $sql = "SELECT ID, TEXT FROM PURCHASES WHERE ID=1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<p contenteditable='true' onBlur='saveToDatabase(this, \"TEXT\", 1, \"PURCHASES\")'>";
            echo $row['TEXT'];
        }
    }
    ?>
</p>
</body>