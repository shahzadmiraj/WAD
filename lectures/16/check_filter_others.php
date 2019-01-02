<?php
/**
 * Created by PhpStorm.
 * User: shahzadmiraj
 * Date: 30/12/2018
 * Time: 6:00 PM
 */
 //filter in two part sanitation and validiate learn in website php.net
$email="ndejknjd@gmail.com";
if(filter_var($email,FILTER_VALIDATE_EMAIL))
{
    print "this is valid email";
}
else
{
    print "this is not valid email";
}
?>