
<?php
$con=mysqli_connect("localhost","root","","xml");
if(!$con)
{
echo "not connected";
exit();
}
extract($_POST);
if(isset($_POST['submission'])) {
    $insert1 = "INSERT INTO `classes`(`id`, `name`, `mid`) VALUES ('NULL','$classes','$degree')";
    $result=mysqli_query($con,$insert1);
    header("location:insertDatain.php");
}
?>
