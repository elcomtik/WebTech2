<?php
/**
 * Created by PhpStorm.
 * User: rdanko
 * Date: 26.5.2017
 * Time: 9:56
 */
include_once 'session.php';
?>

<head>
    <?php
    include_once 'includes.php';
    ?>
    <link href="assets/lightGallery/css/lightgallery.css" rel="stylesheet">
    <link href="assets/css/gallery.css" rel="stylesheet">
    <script src="assets/lightGallery/js/lightgallery.min.js"></script>
    <script src="assets/lightGallery/js/lg-thumbnail.min.js"></script>
    <script src="assets/lightGallery/js/lg-zoom.js"></script>
    <script src="assets/lightGallery/js/lg-fullscreen.min.js"></script>
    <script src="assets/js/gallery.js"></script>
    <script src="assets/lightGallery/js/lg-autoplay.js"></script>
    <script src="assets/lightGallery/js/lg-zoom.js"></script>
    <script src="assets/lightGallery/js/lg-hash.js"></script>
    <script src="assets/lightGallery/js/lg-pager.js"></script>
</head>
<body>
<?php
include_once 'menu.php';
include_once 'DB_config.php';

?>
<div class="row row-no-margin">
    <div class="container-fluid col-lg-3">
        <table class="table table-hover col-lg-12">
            <thead>
            <th>
                <?php echo $lang['galery.galery_list']; ?>
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
            if ($stmt = $conn->prepare("SELECT id,date,title_sk,title_en,folder FROM GALERY")){

                $stmt->execute();

                /* bind result variables */
                $stmt->bind_result($id, $date, $title_sk, $title_en, $folder);
                while ($stmt->fetch()) {

                    echo "<tr folder=" . $folder . "><td>";

                    if ($_SESSION['lang'] == "en"){
                        echo $title_en;
                    }
                    elseif ($_SESSION['lang'] == "sk"){
                        echo $title_sk;
                    }
                    echo "</td></tr>";
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

    <div class="container-fluid col-lg-9">
        <div class="demo-gallery">
            <ul id="lightgallery" class="list-unstyled row">
            </ul>
        </div>
    </div>
</div>

<?php include_once('footer.php');?>
</body>
