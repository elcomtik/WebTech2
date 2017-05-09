<?php
/**
 * Created by PhpStorm.
 * User: eentox
 * Date: 5/5/17
 * Time: 7:14 PM
 */

?>
<div class="navbar navbar-static-top navbar-inverse" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php "><?php echo $lang['home']; ?></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#"><?php echo $lang['about_us']; ?></a></li>
                <li><a href="#"><?php echo $lang['staff']; ?></a></li>
                <li><a href="#"><?php echo $lang['study']; ?></a></li>
                <li>
                    <a href="#" class="dropdown-togglex" data-toggle="dropdown"><?php echo $lang['research']; ?><b
                                class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><?php echo $lang['projects']; ?></a></li>
                        <li>
                            <a href="#" class="dropdown-toggle"
                               data-toggle="dropdown"><?php echo $lang['research_topics']; ?><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><?php echo $lang['electric_kart']; ?></a></li>
                                <li><a href="#"><?php echo $lang['independent_car']; ?></a></li>
                                <li><a href="#"><?php echo $lang['led_cube']; ?></a></li>
                                <li><a href="#"><?php echo $lang['biomechatronics']; ?></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#"><?php echo $lang['news']; ?></a></li>
                <li>
                    <a href="#" class="dropdown-togglex" data-toggle="dropdown"><?php echo $lang['activities']; ?><b
                                class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><?php echo $lang['photos']; ?></a></li>
                        <li><a href="#"><?php echo $lang['video']; ?></a></li>
                        <li><a href="#"><?php echo $lang['media']; ?></a></li>
                        <li>
                            <a href="#" class="dropdown-toggle"
                               data-toggle="dropdown"><?php echo $lang['our_websites']; ?><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><?php echo $lang['electromobility']; ?></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#"><?php echo $lang['contact']; ?></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo $lang['lang_link'] ?>"><?php echo $lang['lang_change']; ?></a></li>
                <?php
                if (isset($_SESSION['name'])) {
                    echo "<li><a href=\"#\" class=\"dropdown-togglex\" data-toggle=\"dropdown\"><span class=\"glyphicon glyphicon-user\"></span> " . $_SESSION['name'] . "<b class=\"caret\"></b></a>";
                    echo "<ul class=\"dropdown-menu\">";
                    echo "<li><a href=\"intranet_logout.php\">" . $lang['logout'] . "</a></li>";
                    echo "</ul></li>";
                } else {
                    echo "<li><a href=\"intranet_login.php\"><span class=\"glyphicon glyphicon-log-in\"></span> " . $lang['login'] . "</a></li>";
                }
                ?>
            </ul>
        </div>
    </div>
</div>
