
<?php include_once("header.php")  //include_once use all employee use it once in ther php file
   ?>







                        <!--use of $_GET also change senddate.php file-->

<!--<h1 align="center"> $_GET['']</h1>
<h2>name (may be use of value  keyword also use when both are used) is keyword which is use as $_GET['(html_name)="(html_value"']  </h2>
<pre>
        it not secure
        can't sent image
        limited characters 1024
        mathod is get
        html key is name varible that varible value is use in $_GET array as a index
</pre>
<form action="senddate.php" method="get">
    <label>name:</label>
    <input type="text" name="name"><br>

    <label>gander:</label><br>
    <label> male</label><input type="radio" name="gander" value="male"><br>
    <label>female</label><input type="radio" name="gander" value="female"><br>
    <input type="submit">
</form>-->







                 <!-- $_POST use also change senddate.php file-->

<!--<h1 align="center"> $_POST['']</h1>
<h2>name (may be use of value  keyword also use when both are used) is keyword which is use as $_POST['(html_name)="(html_value"']  </h2>
<pre>
        it secure
        can sent image
        not limited characters
        mathod is post
        html key is name varible that varible value is use in $_POST array as a index
</pre>
<form action="senddate.php" method="post">
    <label>name:</label>
    <input type="password" name="name" ><br>

    <label>gander:</label><br>
    <label> male</label><input type="radio" name="gander" value="male"><br>
    <label>female</label><input type="radio" name="gander" value="female"><br>
    <input type="submit">
</form>-->









            <!-- $_POST WITH FILE SEND use also change senddate.php file-->
<!--
<h1 align="center"> $_POST['']</h1>
<h2>name (may be use of value  keyword also use when both are used) is keyword which is use as $_POST['(html_name)="(html_value"']  </h2>
<pre>
        it secure
        can sent image html attribute enctype="multipart/form-data"
        not limited characters
        mathod is post
        html key is name varible that varible value is use in $_POST array as a index
</pre>
<form action="senddate.php" method="post" enctype="multipart/form-data">
    <label>name:</label>
    <input type="password" name="name" ><br>

    <label>gander:</label><br>
    <label> male</label><input type="radio" name="gander" value="male"><br>
    <label>female</label><input type="radio" name="gander" value="female"><br>
    <input type="file" name="filename"><br>
    <input type="submit">
</form>
-->





<!--play with SESSION variable      COOKI-->

<?php
session_start(); //one page access only on browser
if(isset($_COOKIE['username1']))
{
    echo "your are log in ";
    $_SESSION['username1']=$_COOKIE['username1'];
    exit();
}
if(isset($_SESSION['username1']))
{
    echo "you are already login so that we cannot access again this page on one browser";
    exit();
}
?>


<h1 align="center"> $_POST[''] with SESSION ARRAY</h1>
<h2>  jkbj</h2>
<pre>
    it is use without send only one file
    it can be access all file
    without action html attribute use
    it is use
    without including file in main file

    ............syntax:


    session_start();
    $_SESSION['username1']=$_POST['name'];

    ........... access syntax:

    session_start();
echo $_SESSION['username1']



    ++++++++++++++++++++++++++++++
    <h1> COOKIE is used to store data in file</h1>
    syntax:

     $var=$_POST['name'];
        $expire=time()+86400; //24hrs
        setcookie("username1",$var,$expire);

       ++for expire++

        $expire=time()-86400;
        setcookie("username1",'',$expire);



    ACCESS COOKIE:

    $_COOKIE['username1'])



</pre>
<form  method="post">
    <label>name:</label>
    <input type="password" name="name" ><br>

    <label>gander:</label><br>
    <label> male</label><input type="radio" name="gander" value="male"><br>
    <label>female</label><input type="radio" name="gander" value="female"><br>
    <input type="submit">
</form>

<?php
    $var;

        $var=$_POST['name'];
        $expire=time()+86400; //24hrs
        setcookie("username1",$var,$expire);
      /*  $expire=time()-86400;
        setcookie("username1",'',$expire);*/
    $_SESSION['username1']=$var;
?>





<?php include("footer.php")
?>
