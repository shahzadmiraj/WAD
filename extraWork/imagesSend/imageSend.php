<?php
/**
 * Created by PhpStorm.
 * User: shahzadmiraj
 * Date: 15/01/2019
 * Time: 11:57 PM
 */

if(isset($_POST['submit']))
{
    //file[nameFileHtml]['globalName']
    $imagename=$_FILES['img1']['name'];//storing file name
    $tempImageName=$_FILES['img1']['tmp_name'];//temp name store
    $con=mysqli_connect("localhost","root","","storeimg");
    if(!isset($con))
    {
        print "connection fail";
    }
    //file is move in our server
    move_uploaded_file($tempImageName,"images/$imagename");

    //store which file name is store by user
    $sql_img_query="INSERT INTO `uploadimg`(`id`, `images`) VALUES (NULL ,'$imagename')";

    //run your query
    $run=mysqli_query($con,$sql_img_query);
    if(!isset($run))
    {
        print "run fail";
    }
    else
        echo "successfully upload to mysqli";
}
?>
<html>
<head>
    <title>
        images uploads
    </title>
</head>
<body>
<form method="post" action="imageSend.php" enctype="multipart/form-data">
    <input type="file" name="img1" required="required">
    <input type="submit" name="submit" value="upload">


</form>
</body>
</html>
