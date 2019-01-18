<?php
/**
 * Created by PhpStorm.
 * User: shahzadmiraj
 * Date: 16/01/2019
 * Time: 1:36 AM
 */
$con=mysqli_connect("localhost","root","","sms");
if(!isset($con))
{
    print "connection fail to database";
    exit();
}

?>