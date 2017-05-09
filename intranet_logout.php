<?php
/**
 * Created by PhpStorm.
 * User: eentox
 * Date: 5/8/17
 * Time: 11:39 PM
 */
include_once 'session.php';
unset($_SESSION['name']);
unset($_SESSION['id']);
unset($_SESSION['login_user']);
header("location: index.php");
?>