<?php
/**
 * Created by PhpStorm.
 * User: shahzadmiraj
 * Date: 09/01/2019
 * Time: 5:29 PM
 */
//require_once "connection.php";
require_once "db_connection.php";
if(!isset($_SESSION['user_email']))
{
    header("location:login.php");
}
if(isset($_GET['submitBtn1']))
{
    $text=$_GET['textfield1'];
    global  $con;
    $query1="INSERT INTO `brands`(`brand_title`) VALUES ('$text')";
    $connectedq1=mysqli_query($con,$query1);
        if (!isset($connectedq1)) {
            header('location:index.php?logged_in=You have failure to add brand');
            exit();
        } else {

            header("location:index.php?insert_brand=insert_brand.php");
        }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>insert_Brand</title>
</head>
<body>
<div style="height: 20vh">
</div>
<h1 align="center">Insert Brand</h1>
<div class="container "align="center">
    <form action="insert_brand.php" method="get">
        <input type="text" name="textfield1"><br>
        <input type="submit" name="submitBtn1">
    </form>
</div>
</body>
</html>