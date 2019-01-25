<?php
/**
 * Created by PhpStorm.
 * User: shahzadmiraj
 * Date: 09/01/2019
 * Time: 5:29 PM
 */
//require_once "connection.php";
//session_start();
if(!isset($_SESSION['user_email']))
{
    header("location:login.php");
}
require_once "db_connection.php";
if(isset($_GET['submitBtn']))
{
 $text=$_GET['textfield'];
 global  $con;
 $query="INSERT INTO `categories`(`cat_id`, `cat_title`) VALUES ('NULL','$text')";
    $connectedq=mysqli_query($con,$query);
    if(!isset($connectedq))
    {
        echo "not connected";
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>insert_category</title>
</head>
<body>
<div style="height: 20vh">
</div>
<h1 align="center">Inset Category</h1>
<div class="container "align="center">
<form action="insert_category.php" method="get">
    <input type="text" name="textfield"><br>
    <input type="submit" name="submitBtn">
</form>
</div>
</body>
</html>