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
            <a class="navbar-brand" href="index.php "><?php echo $lang['navbar.home']; ?></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li><a href="#"><span
                                class="glyphicon glyphicon-th-list"></span> <?php echo $lang['navbar.about_us']; ?></a>
                </li>
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $lang['navbar.staff']; ?></a>
                </li>
                <li><a href="#"><span class="glyphicon glyphicon-education"></span> <?php echo $lang['navbar.study']; ?>
                    </a>
                </li>
                <li>
                    <a href="#" class="dropdown-togglex" data-toggle="dropdown"><span
                                class="glyphicon glyphicon-certificate"></span> <?php echo $lang['navbar.research']; ?>
                        <b
                                class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><?php echo $lang['navbar.projects']; ?></a></li>
                        <li>
                            <a href="#" class="dropdown-toggle"
                               data-toggle="dropdown"><?php echo $lang['navbar.research_topics']; ?><b
                                        class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><?php echo $lang['navbar.electric_kart']; ?></a></li>
                                <li><a href="#"><?php echo $lang['navbar.independent_car']; ?></a></li>
                                <li><a href="#"><?php echo $lang['navbar.led_cube']; ?></a></li>
                                <li><a href="#"><?php echo $lang['navbar.biomechatronics']; ?></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> <?php echo $lang['navbar.news']; ?>
                    </a></li>
                <li>
                    <a href="#" class="dropdown-togglex" data-toggle="dropdown"><span
                                class="glyphicon glyphicon-check"></span> <?php echo $lang['navbar.activities']; ?><b
                                class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><?php echo $lang['navbar.photos']; ?></a></li>
                        <li><a href="video.php"><?php echo $lang['navbar.video']; ?></a></li>
                        <li><a href="#"><?php echo $lang['navbar.media']; ?></a></li>
                        <li>
                            <a href="#" class="dropdown-toggle"
                               data-toggle="dropdown"><?php echo $lang['navbar.our_websites']; ?><b
                                        class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><?php echo $lang['navbar.electromobility']; ?></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#"><span
                                class="glyphicon glyphicon-map-marker"></span> <?php echo $lang['navbar.contact']; ?>
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo $lang['lang_link'] ?>"><span
                                class="glyphicon glyphicon-globe"></span> <?php echo $lang['navbar.lang_change']; ?></a>
                </li>
                <?php
                if (isset($_SESSION['name'])) {
                    echo "<li><a href=\"#\" class=\"dropdown-togglex\" data-toggle=\"dropdown\"><span class=\"glyphicon glyphicon-user\"></span> " . $_SESSION['name'] . "<b class=\"caret\"></b></a>";
                    echo "<ul class=\"dropdown-menu\">";
                    echo "<li><a href=\"intranet_logout.php\">Pedagogika</a></li>";
                    echo "<li><a href=\"intranet_logout.php\">Doktoranti</a></li>";
                    echo "<li><a href=\"intranet_logout.php\">Publikácie</a></li>";
                    echo "<li><a href=\"intranet_logout.php\">Sluožbné cesty</a></li>";
                    echo "<li><a href=\"intranet_logout.php\">Nákupy</a></li>";
                    echo "<li><a href=\"intranet_logout.php\">Dochádzka</a></li>";
                    echo "<li><a href=\"rozdelenie_uloh.php\">Rozdelenie úloh</a></li>";
                    echo "<li role=\"separator\" class=\"divider\"></li>";
                    echo "<li><a href=\"intranet_logout.php\"><span class='glyphicon glyphicon-log-out'></span> " . $lang['navbar.logout'] . "</a></li>";
                    echo "</ul></li>";
                }
                else {
                    echo "<li><a href=\"intranet_login.php\"><span class=\"glyphicon glyphicon-log-in\"></span> " . $lang['navbar.login'] . "</a></li>";
                }
                ?>
            </ul>
        </div>
    </div>
</div>
