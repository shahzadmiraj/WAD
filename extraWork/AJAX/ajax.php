<?php
/**
 * Created by PhpStorm.
 * User: shahzadmiraj
 * Date: 26/01/2019
 * Time: 9:36 PM
 */
?>
<html>
<head>
    <!--<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>-->
    <script src="jquery-3.3.1.js"></script>
    <title>
        Button <Ajax>      </Ajax>
    </title>
    <script>
      $(document).ready(function () {    //when page complete loaded
                  $("#submit").click(function () {
                        $("#con").load('show.php',function () {//when loaded then
                            alert("this is done");
                        });
                  })
      })
    </script>
</head>
<body>
<h1 id="con" align="center"> this is going to change</h1>
<button align="center" id="submit">click it </button>
</body>
</html>
