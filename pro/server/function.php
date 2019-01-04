<?php
/**
 * Created by PhpStorm.
 * User: shahzadmiraj
 * Date: 02/01/2019
 * Time: 5:07 PM
 */
require "connection.php";
function getcats()
{
    global  $con;
    if(!isset($con))
        echo "error";
    $getCatquery="SELECT * FROM `categories`";
    $connected=mysqli_query($con,$getCatquery);
    if($connected==true)
    {
       while ($queryAns=mysqli_fetch_assoc($connected))
       {
           $cat_title=$queryAns['catTitle'];
           echo '<li><a class="nav-link"  href="#">'.$cat_title.'</a> </li>';
       }
    }
}
function getBrands()
{
    global  $con;
    if(!isset($con))
    {
        echo "error";
    }
    $getQueryBrands="SELECT * FROM `Brands` WHERE 1";
    $connectQueryWithDb=mysqli_query($con,$getQueryBrands);
    if($connectQueryWithDb==true)
    {
        while($result=mysqli_fetch_assoc($connectQueryWithDb))
        {
            $brandTitle=$result['brandTitle'];
            echo '<li><a class="nav-link" href="#">'.$brandTitle.'</a></li>';
        }


    }

}
?>