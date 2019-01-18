<?php
/**
 * Created by PhpStorm.
 * User: shahzadmiraj
 * Date: 16/01/2019
 * Time: 11:44 PM
 */
session_start();
if($_SESSION['uid'])
{
    //echo $_SESSION['uid'];

}
else
{
    //if user copy this URL and want to run than go to previous main page
   header('location: ../login.php');
}
?>
<?php
include_once "header.php";
?>
<div class="admintitle">
    <a href="../logout.php" style="float: right;">LogOut</a>
<h1 align="center">welcome To admin DashBorad </h1>
</div>
<div>
    <table align="center" border="1" class="adminDashbord">
        <tr>
            <td>
               1.<a href="addstudent.php">Insert Student Details</a>
            </td>
        </tr>
        <tr>
            <td>
                2.<a href="updateStudent.php">Update students</a>
            </td>

        </tr>
        <tr>
            <td>
                3.<a href="deletestudent.php">Delete Students</a>
            </td>
        </tr>
    </table>
</div>
</body>
</html>
