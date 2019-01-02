<?php
/**
 * Created by PhpStorm.
 * User: shahzadmiraj
 * Date: 30/12/2018
 * Time: 1:25 PM
 */




session_start();
if(isset($_SESSION['username1']))  //user is already sign_out his page and cannot access his  page again
{
    echo "welcome to your page " . $_SESSION['username1'];
}
else
{
    echo "you are not login so you cannot access is webpage";
}
?>