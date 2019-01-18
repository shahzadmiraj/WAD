<?php
/**
 * Created by PhpStorm.
 * User: shahzadmiraj
 * Date: 16/01/2019
 * Time: 11:46 PM
 */
session_start();
session_destroy();
header("location:login.php");
?>