<?php
/**
 * Created by PhpStorm.
 * User: rdanko
 * Date: 26.5.2017
 * Time: 10:39
 */
include_once 'session.php';
if ($_SESSION['lang'] == 'en') {
    header('location: index.php');
}
?>

<head>
    <?php
    include_once 'includes.php';
    ?>
    <link href="assets/css/gallery.css" rel="stylesheet">
    <script src="assets/js/media.js"></script>
</head>
<body>
<?php
include_once 'menu.php';
include_once 'DB_config.php';

?>
<div class="row row-no-margin">
    <div class="container-fluid col-lg-6 col-lg-offset-3">
        <table class="table table-hover col-lg-12">
            <thead>
            <th>
                <?php echo $lang['media.media_list']; ?>
            </th>
            </thead>
            <tbody>

            <?php
            $conn = new mysqli($servername, $username, $password, $db_name);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $conn->set_charset('utf8');

            $stmt =  $conn->stmt_init();
            if ($stmt = $conn->prepare("SELECT id,title,media,date,filename,url FROM MEDIA")){

                $stmt->execute();

                /* bind result variables */
                $stmt->bind_result($id, $title, $media, $date, $filename, $url);
                while ($stmt->fetch()) {

                    echo "<tr filename='" . $filename . "' url='" . $url . "'>";
                    echo "<td>" . $title . "</td>";
                    echo "<td>" . $media . "</td>";
                    echo "<td>" . $date . "</td>";
                    echo "</tr>";
                }
                $stmt->close();
            }
            else{
                echo "false";
            }

            $conn->close();
            ?>

            </tbody>
        </table>
    </div>
</div>

<?php include_once('footer.php');?>
</body>
