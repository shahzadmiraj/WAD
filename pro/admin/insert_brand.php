<?php
/**
 * Created by PhpStorm.
 * User: shahzadmiraj
 * Date: 09/01/2019
 * Time: 5:29 PM
 */
require_once "connection.php";


if(isset($_POST['submitBtn']))
{
    $text=$_POST['textfield'];
    global  $con;
    $query="INSERT INTO `Brands`(`brandTitle`, `brandId`) VALUES ('$text',NULL)";
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
    <title>insert_brand</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="textfield"><br>
    <input type="submit" name="submitBtn">
</form>
</body>
</html>