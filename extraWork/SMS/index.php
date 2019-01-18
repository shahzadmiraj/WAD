<?php
/**
 * Created by PhpStorm.
 * User: shahzadmiraj
 * Date: 16/01/2019
 * Time: 1:31 AM
 */
?>
<html>
<head>
    <title>student management system</title>
</head>
<body>
<h3 align="right"> <a href="login.php"> Admin login</a></h3>
<h1 align="center">Welcome to student Management system</h1>
<form method="post" action="index.php">
<table style="width: 100%;align-content: center;border: "  >
    <tr>
        <td colspan="2"> Student Information</td>
    </tr>
    <tr>
        <td>choose standerd</td>
        <td><select name="std">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
            </select></td>
    </tr>
    <tr>
        <td> Enter Rollno</td>
        <td><input type="text" name="rollno" required></td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" name="submit" value="showdetail"></td
    </tr>
</table>
</form>
</body>
</html>
