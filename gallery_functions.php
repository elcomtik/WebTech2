<?php
/**
 * Created by PhpStorm.
 * User: rdanko
 * Date: 26.5.2017
 * Time: 12:25
 */

include('DB_config.php');
include_once('session.php');


if (isset($_REQUEST['action'])){
    if ($_REQUEST['action'] == "loadGallery") {
        nacitaj();
    }
}else{
    die();
}

function nacitaj(){

    $dir = "uploads/galeria/" . $_REQUEST['dir'] . "/";
//    echo $dir;

    $files = scandir($dir);
    unset($files[0]);
    unset($files[1]);
    foreach ($files as $f){
        echo "<li class=\"col-xs-6 col-sm-4 col-md-3\" data-responsive=\"img/1-375.jpg 375, img/1-480.jpg 480, img/1.jpg 800\" data-src='" . $dir . $f . "'>";
        echo "<a href=''>";
        echo "<img class=\"img-responsive\" src='" . $dir . $f . "'/>";
        echo "</a>";
        echo "</li>";
    }
//    var_dump($files);

}