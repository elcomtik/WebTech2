<?php
/**
 * Created by PhpStorm.
 * User: eentox
 * Date: 5/8/17
 * Time: 9:17 PM
 */
$error = '';
include_once 'session.php';
if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['pass'])) {
        $error = 'Prihlasovacie meno a heslo nesmú byť prázdne';
    }
    else {

        include_once 'DB_config.php';
        $conn = new mysqli($servername, $username, $password, $db_name);
        $conn->set_charset('utf8');

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $user = stripslashes($_POST['username']);
        $user = mysqli_real_escape_string($conn, $user);
        $pass = $_POST['pass'];

        $ldap_config['host'] = 'ldap.stuba.sk';
        $ldap_config['port'] = '389';
        $ldaprdn = "uid=$user, ou=People, DC=stuba, DC=sk";

        $result = $conn->query("SELECT * FROM `intranet_user` WHERE `ldapLogin` = '$user'");

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            if (!($ldap_conn = ldap_connect($ldap_config['host'], $ldap_config['port']))) {
                $error = 'Nedokážeme kontaktovať LDAP';
            }

            ldap_set_option($ldap_conn, LDAP_OPT_PROTOCOL_VERSION, 3);
            set_error_handler("exception_error_handler");
            try {
                $bind = ldap_bind($ldap_conn, $ldaprdn, $pass);
                if ($bind) {
                    $_SESSION['login_user'] = $user;
                    $_SESSION['name'] = $row['name'] . " " . $row['surname'];
                    $_SESSION['user'] = $row['user'];
                    $_SESSION['hr'] = $row['hr'];
                    $_SESSION['reporter'] = $row['reporter'];
                    $_SESSION['editor'] = $row['editor'];
                    $_SESSION['admin'] = $row['admin'];

                    header("location: intranet.php");
                }
            } catch (ErrorException $e) {
                $error = "Nesprávne prihlasovacie meno alebo heslo";
            }
        }
        else {
            $error = 'Zadaný užívateľ nemá prístup do intranetu';
        }
    }
}

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

function exception_error_handler($errno, $errstr, $errfile, $errline)
{
    throw new ErrorException($errstr, $errno, 0, $errfile, $errline);
}

?>

<div class="container">
    <div class="well-lg well col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3">
        <form action="intranet_login.php" method="post">
            <div class="form-group">
                <label for="email"><?php echo $lang['intranet_login.username'] ?></label>
                <input type="username" class="form-control" name="username">
            </div>
            <div class="form-group">
                <label for="pwd"><?php echo $lang['intranet_login.pass'] ?></label>
                <input type="password" class="form-control" name="pass">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-block"
                        name="submit"><?php echo $lang['intranet_login.login_button'] ?></button>
            </div>
            <?php
            if ($error !== '') {
                echo "<div class=\"form-group\"><div class=\"alert alert-danger\" role=\"alert\">" . $error . "</div></div>";
            }
            ?>
        </form>
    </div>
</div>

</body>
