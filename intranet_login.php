<?php
/**
 * Created by PhpStorm.
 * User: eentox
 * Date: 5/8/17
 * Time: 9:17 PM
 */


include_once 'session.php';
if (isset($_SESSION['login_user'])) {
    header("location: intranet.php");
}
?>

<head>
    <?php
    include_once 'includes.php'
    ?>
</head>

<body>
<?php
include_once 'menu.php';
$error = '';
if (isset($_POST['submit'])) {
    if (empty($_POST['username'] || $_POST['pass'])) {
        if ($_SESSION['lang'] === 'sk')
            $error = 'Nesprávne prihlasovacie meno alebo heslo';
        else
            $error = 'Username or Password is invalid';
    } else {
        include_once 'DB_config.php';
        $conn = new mysqli($servername, $username, $password, $db_name);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $user = stripslashes($_POST['username']);
        $user = mysqli_real_escape_string($conn, $user);
        $pass = hash('sha512', $_POST['pass']);
        $result = $conn->query("SELECT * FROM `intranet_user` WHERE `username` = '$user'");
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if ($row['password'] === $pass) {
                $_SESSION['login_user'] = $row['username'];
                $_SESSION['id_user'] = $row['id'];
                $_SESSION['name'] = $row['first_name'] . " " . $row['last_name'];
                header("location: intranet.php");
            } else {
                if ($_SESSION['lang'] === 'sk')
                    $error = 'Nesprávne prihlasovacie meno alebo heslo';
                else
                    $error = 'Username or Password is invalid';
            }
        } else {
            if ($_SESSION['lang'] === 'sk')
                $error = 'Nesprávne prihlasovacie meno alebo heslo';
            else
                $error = 'Username or Password is invalid';
        }
    }
}
?>

<div class="container">
    <div class="well-lg well col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
        <form action="intranet_login.php" method="post">
            <div class="form-group">
                <label for="email"><?php echo $lang['username'] ?></label>
                <input type="username" class="form-control" name="username">
            </div>
            <div class="form-group">
                <label for="pwd"><?php echo $lang['pass'] ?></label>
                <input type="password" class="form-control" name="pass">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-block"
                        name="submit"><?php echo $lang['login_button'] ?></button>
            </div>
            <?php
            if ($error !== '')
                echo "<div class=\"form-group\"><div class=\"alert alert-danger\" role=\"alert\">" . $error . "</div></div>";
            ?>
        </form>
    </div>
</div>

</body>
