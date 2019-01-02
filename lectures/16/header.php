<?php
/**
 * Created by PhpStorm.
 * User: shahzadmiraj
 * Date: 29/12/2018
 * Time: 10:54 PM
 */
?>
<?php include ("functions.php") ?><!--  include php file and as give path may or ma not be-->
<!--f we use REQUIRE instead of include then must be that file exist otherwise-->
<!--we get error-->
<html>
<head>
    <title> header </title>
</head>
<body>
<h1>this is header</h1>
<?php
$s1="this is header ";
?>
<h1>
    <?php
    f1($s1);
    ?>
</h1>

