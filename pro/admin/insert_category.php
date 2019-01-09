<?php
/**
 * Created by PhpStorm.
 * User: shahzadmiraj
 * Date: 09/01/2019
 * Time: 5:29 PM
 */
require_once "connection.php";


if(isset($_GET['submitBtn']))
{
 $text=$_GET['textfield'];
 global  $con;
 $query="INSERT INTO `categories`(`catId`, `catTitle`) VALUES (NULL,'$text')";
    $connectedq=mysqli_query($con,$query);
    if(!isset($connectedq))
    {
        echo "nnot connected";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>insert_category</title>
</head>
<body>
<form action="" method="get">
    <input type="text" name="textfield"><br>
    <input type="submit" name="submitBtn">
</form>
</body>
</html>