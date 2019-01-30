<?php
/**
 * Created by PhpStorm.
 * User: shahzadmiraj
 * Date: 31/01/2019
 * Time: 2:48 AM
 */
?>
<html>
<head>
    <title>insert data using ajax</title>
    <script src="/Users/shahzadmiraj/.bitnami/stackman/machines/xampp/volumes/root/htdocs/WAD/extraWork/AJAX/jquery-3.3.1.js"></script>
</head>
<body>
<h1 align="center">
    insert data using ajax
</h1>
<form id="myform" method="post" action="insertInDatabase.php">
    classes:<input type="text" id="classes"width="80%" name="classes"><br>
    degree:<input type="text" id="degree" name="degree" width="80%"><br>
    <input type="submit" id="submission" name="submission" width="80%">
</form>
<script>
    $(document).read(function () {
        var formPick=$('#myform');
        //if someone click on this button then function call
       $("#submission").click(function () {
         $.ajax({

             url:formPick.attr("action"),
             type:'post'
             data:$("#myform input").serialize(),
             success:function (data) {
                // console(data);

             }
         });
       });
    });
</script>
</body>
</html>
