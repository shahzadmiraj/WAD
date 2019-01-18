<?php
/**
 * Created by PhpStorm.
 * User: shahzadmiraj
 * Date: 16/01/2019
 * Time: 11:44 PM
 */
session_start();
if(isset($_SESSION['uid']))
{

}
else
{
 header("location: ../login.php");
}
?>
<?php
include_once "header.php";
?>
<div class="admintitle">
    <a href="../logout.php" style="float: right;">LogOut</a>
    <h1 align="center">welcome To admin DashBorad </h1>
</div>
<form action="addstudent.php" method="post" enctype="multipart/form-data">
    <table border="1" class="adminDashbord">
        <tr>
            <td>
                Rollno
            </td>
            <td>
                <input type="text" placeholder="rollno" name="rollno" required>
            </td>
        </tr>

        <tr>
            <td>
                full Name
            </td>
            <td>
                <input type="text" placeholder="fullname" name="fullname" required>
            </td>
        </tr>

        <tr>
            <td>
                city
            </td>
            <td>
                <input type="text" placeholder="city" name="city" required>
            </td>
        </tr>
        <tr>
            <td>
                contact no
            </td>
            <td>
                <input type="text" placeholder="contactno" name="contactno" required>
            </td>
        </tr>
        <tr>
            <td>
                standard
            </td>
            <td>
                <input type="text" placeholder="standard" name="standard" required>
            </td>
        </tr>
        <tr>
            <td>
                image
            </td>
            <td>
                <input type="file" name="simg" required>
            </td>
        </tr>
        <tr>
            <td>
                <input align="center" type="submit" name="submitBtn">
            </td>
        </tr>
    </table>

</form>
</body>
</html>
<?php

    if(isset($_POST['submitBtn']))
    {
        include_once ('../DatabaseConnections/DatabaseConnection.php');
        $rollno=$_POST['rollno'];
        $name=$_POST['fullname'];
        $city=$_POST['city'];
        $std=$_POST['standard'];
        $pcon=$_POST['contactno'];
        $image=$_FILES['simg']['name'];
        $tempname=$_FILES['simg']['tmp_name'];
        move_uploaded_file($tempname,"../images/$image");
        $query="INSERT INTO `student`(`id`, `rollno`, `name`, `city`, `pcont`, `standerd`, `image`) VALUES ('NULL','$rollno','$name','$city','$pcon','$std','$image')";
        $connection=mysqli_query($con,$query);
        if(isset($connection))
        {
            ?>
            <script>
                alert("data is succesfully ")
            </script>
                <?php

        }

    }




?>