<?php
/**
 * Created by PhpStorm.
 * User: shahzadmiraj
 * Date: 27/01/2019
 * Time: 2:16 AM
 */



$con=mysqli_connect("localhost","root","","xml");
if(!$con)
{
    echo "not connected";
}
$nameid=$_POST['mid'];
$q="SELECT `id`, `name`, `mid` FROM `classes` WHERE mid=$nameid";
$result=mysqli_query($con,$q);
if(!isset($result))
    echo "error";
while ($rows=mysqli_fetch_array($result))
{
    ?>
        <option>

            <?php

            echo $rows['name'];
            ?>

        </option>

    <?php
}

?>