<?php
/**
 * Created by PhpStorm.
 * User: eentox
 * Date: 5/5/17
 * Time: 7:14 PM
 */

?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ustav</title>
    <link rel="stylesheet" href="assets/bootstrap/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script rel="script" src="assets/jquery/jquery-3.2.1.min.js"></script>
    <script rel="script" src="assets/js/menu.js"></script>
    <script rel="script" src="assets/bootstrap/bootstrap/js/bootstrap.min.js"></script>
</head>

<div class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><?php echo $lang['home']; ?></a>
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
                <li><a href="index.php?lang=sk"><?php echo $lang['lang_sk']; ?></a></li>
                <li><a href="index.php?lang=en"><?php echo $lang['lang_en']; ?></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> <?php echo $lang['login']; ?></a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>
