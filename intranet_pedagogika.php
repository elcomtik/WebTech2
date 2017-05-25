<?php
/**
 * Created by PhpStorm.
 * User: Sabinka
 * Date: 5/18/2017
 * Time: 2:52 PM
 */
include_once 'session.php';
if (!isset($_SESSION['name'])) {
    header('location: index.php');
}
require_once "DB_config.php";
$conn = new mysqli($servername, $username, $password, $db_name);
mysqli_set_charset($conn, "utf8");

if (isset($_POST['linkInsert'])) {
    $sql = "INSERT INTO `PEDAGOGY_LINKS`(`NAME`, `LINK`) VALUES ('" . $_POST['name'] . "', '" . $_POST['link'] . "')";
    $conn->query($sql);
    $_POST['linkInsert'] = array();
} else if (isset($_POST['categoryInsert'])) {
    $sql = "INSERT INTO `PEDAGOGY_DOCUMENTS`(`DOCUMENT`) VALUES ('" . $_POST['name'] . "')";
    $conn->query($sql);
    $_POST['categoryInsert'] = array();
} else if (isset($_POST['attachmentInsert'])) {
    $targetfolder = "uploads/pedagogy/";
    $targetfolder = $targetfolder . basename($_FILES['file']['name']);
    move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder);
    $sql = "INSERT INTO `PEDAGOGY_ATTACHMENTS`(`ATTACHMENT`, `ATTACHMENT_LINK`, `DOCUMENT_ID`) VALUES ('" . $_POST['name'] . "', '" . $targetfolder . "', " . $_POST['category'] . ")";
    $conn->query($sql);
    $_POST['attachmentInsert']  = array();
}

?>

<head>
    <?php
    include_once 'includes.php';
    ?>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script src="assets/js/intranet.js"></script>
</head>
<body>
<?php
include_once 'menu.php';
?>

<div id="main">
    <h1><?php echo $lang['intranet.pedagogy'] ?></h1>
    <table class="table">
        <thead>
        <tr>
            <th><?php echo $lang['document'] ?></th>
            <th><?php echo $lang['attachment'] ?></th>
        </tr>
        <?php
        $sql = "SELECT ID, NAME, LINK FROM PEDAGOGY_LINKS";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><th colspan='2'><a href='" . $row['LINK'] . "' target='_blank' contenteditable='true' onBlur='saveToDatabase(this, \"NAME\"," . $row['ID'] . ", \"PEDAGOGY_LINKS\")'>" . $row['NAME'] . "</a></th></tr>";
            }
        }
        ?>
        </thead>
        <tbody>
        <?php
        require_once "Document.php";
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT ID, DOCUMENT FROM PEDAGOGY_DOCUMENTS";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $documents = array();
            while ($row = $result->fetch_assoc()) {
                $documents[] = new Document($row["ID"], $row["DOCUMENT"]);
            }
            foreach ($documents as $document) {
                $sql = "SELECT ID, ATTACHMENT, ATTACHMENT_LINK FROM PEDAGOGY_ATTACHMENTS WHERE DOCUMENT_ID='" . $document->id . "'";
                $result = $conn->query($sql);
                echo "<tr>";
                echo "<td  contenteditable='true' onBlur='saveToDatabase(this, \"DOCUMENT\"," . $document->id . ", \"PEDAGOGY_DOCUMENTS\")'>" . $document->document . "</td>";
                echo "<td>";
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<a href='" . $row['ATTACHMENT_LINK'] . "' target='_blank' contenteditable='true' onBlur='saveToDatabase(this, \"ATTACHMENT\"," . $row['ID'] . ", \"PEDAGOGY_ATTACHMENTS\")'>a";
                        echo " " . $row['ATTACHMENT'] . "</a></br>";
                    }
                }
                echo "</td></tr>";
            }
        }
        ?>
        </tbody>
    </table>
    <button type="button" class="btn btn-default" data-toggle="modal"
            data-target="#linkModal"><?php echo $lang['button.add.link'] ?></button>
    <button type="button" class="btn btn-default" data-toggle="modal"
            data-target="#categoryModal"><?php echo $lang['button.add.category'] ?></button>
    <button type="button" class="btn btn-default" data-toggle="modal"
            data-target="#attachmentModal"><?php echo $lang['button.add.attachment'] ?></button>

    <div id="linkModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><?php echo $lang['button.add.link'] ?></h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" method="post" action="">
                        <label class="control-label"><?php echo $lang['button.add.linkname'] ?> </label>
                        <input type="text" name="name" required>
                        <label class="control-label">Link: </label>
                        <input type="text" name="link" required>
                        <input type="hidden" name="linkInsert">
                        <input type="submit" value="<?php echo $lang['button.insert'] ?>" class="btn btn-default"
                               name="submit">
                    </form>
                </div>
            </div>

        </div>
    </div>
    <div id="categoryModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><?php echo $lang['button.add.category'] ?></h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" method="post" action="">
                        <label class="control-label"><?php echo $lang['button.add.categoryname'] ?> </label>
                        <input type="text" name="name" required>
                        <input type="hidden" name="categoryInsert">
                        <input type="submit" value="<?php echo $lang['button.insert'] ?>" class="btn btn-default"
                               name="submit">
                    </form>
                </div>
            </div>

        </div>
    </div>
    <div id="attachmentModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><?php echo $lang['button.add.attachment'] ?></h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
                        <label class=" control-label"><?php echo $lang['button.add.attachmentname'] ?> </label>
                        <input type="text" name="name" required>
                        <label class="control-label"><?php echo $lang['button.add.chooseCategory'] ?> </label>
                        <select name="category" required>
                            <?php
                            foreach ($documents as $document) {
                                echo "<option value='" . $document->id . "'>" . $document->document . "</option>";
                            }
                            ?>
                        </select>
                        <label class="control-label"><?php echo $lang['button.add.attachmentfile'] ?> </label>
                        <input type="file" id="file" name="file" size="50" required>
                        <input type="hidden" name="attachmentInsert">
                        <input type="submit" value="<?php echo $lang['button.insert'] ?>" class="btn btn-default"
                               name="submit">
                    </form>
                </div>
            </div>

        </div>
    </div>

</div>
</body>
