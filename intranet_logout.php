<?php
/**
 * Created by PhpStorm.
 * User: eentox
 * Date: 5/8/17
 * Time: 11:39 PM
 */
include_once 'session.php';
unset($_SESSION['name']);
unset($_SESSION['login_user']);
unset($_SESSION['user']);
unset($_SESSION['hr']);
unset($_SESSION['reporter']);
unset($_SESSION['editor']);
unset($_SESSION['admin']);
header("location: index.php");
?>