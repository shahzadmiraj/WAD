<?php
/**
 * Created by PhpStorm.
 * User: shahzadmiraj
 * Date: 16/01/2019
 * Time: 11:46 PM
 */
require_once "DatabaseConnections/DatabaseConnection.php";
session_start(); //must start

if(isset($_SESSION['uid']))//user is already log in then go to direct is page
{
    header("location:admin/adminDash.php");
}

if(isset($_POST["submitBtn"]))
{
    $username=$_POST["uname"];
    $password=$_POST["pass"];
    $query="SELECT *FROM admin WHERE username='$username' AND password='$password'";
    $connected=mysqli_query($con,$query);
    if(isset($connected))//connection
    {
        $row=mysqli_num_rows($connected);//return total rows number
        if($row<1)
        {
            ?>
            <script>
                alert('user or password not match');
                window.open('login.php','_self');//redirect that page by using javaScript
            </script>

            <?php
        }
        else
        {
            $dataFetch=mysqli_fetch_assoc($connected);
            $id=$dataFetch['id'];
            $_SESSION['uid']=$id; //send data to other page
            header('location:admin/adminDash.php'); //redirect to that page by using PHP
        }
    }
}
?>
<html>
<head>
    <title>admin Login</title>
</head>
<body>
<h1 align="center">Admin LogIN</h1>
<form action="login.php" method="post">
    <table align="center">
        <tr>
            <td>
               Username:
            </td>
            <td>
                <input type="text" name="uname" required>
            </td>
        </tr>
        <tr>
            <td>
                Password:
            </td>
            <td>
                <input type="text" name="pass" required>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="submitBtn">
            </td>
        </tr>

    </table>
</form>
</body>
</html>
