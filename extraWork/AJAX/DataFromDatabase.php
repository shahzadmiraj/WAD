<?php
/**
 * Created by PhpStorm.
 * User: shahzadmiraj
 * Date: 27/01/2019
 * Time: 1:49 AM
 */
$con=mysqli_connect("localhost","root","","xml");
if(!$con)
{
    echo "not connected";
}
?>




<html>
<head>
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="jquery-3.3.1.js"></script>
    <title>
        DataBase
    </title>



</head>
<body>

<h1> get data from database</h1>

<form>
    degree:<select onchange="myfun(this.value)">
        <option> select any one</option>
        <?php

        $q="SELECT * FROM `degree` WHERE 1";
        $result=mysqli_query($con,$q);
        while($rows=mysqli_fetch_array($result))
        {


            ?>
            <option value="
             <?php

            echo $rows['id'];

            ?>
"> <?php

               echo $rows['degrees'];

                ?> </option>
        <?php

        }


        ?>

    </select><br>


    class:<select id="classs">

            <option> chose any one
            </option>


    </select>
    <script>

        function myfun(datavalue1) {

            $.post("class.php",{
                //send data from post by key value

                mid:datavalue1,



            },function (data,status) {
                //get data at

                $("#classs").html(data);

            });

        }
    </script>


</form>

</body>
</html>