<?php
/**
 * Created by PhpStorm.
 * User: shahzadmiraj
 * Date: 30/12/2018
 * Time: 1:14 AM
 */


/*
        //get method

// $_GET['key']   is used for get array from 1st  page(user) and send it to server ;
  //      it is not secure ;
    //    url differencial right side afer ? ;     example: http://192.168.64.2/WAD/lectures/16/senddate.php?name=shahzad&gander=male
      //    after ? sign the data is show on url
echo $_GET['name'].'<br>';
echo $_GET['gander']*/







    /* //post method

    echo $_POST['name'].'<br>';
  echo $_POST['gander'].'<br>';*/










    /*

   // REQUEST METHOD

//REQUEST method is use for both get method or post method we do not know which methor is use my parter
    echo $_REQUEST['name'].'<br>';
    echo $_REQUEST["gander"].'<br>';*/





// REQUEST METHOD WITH FILE VARIABLE
// file is and 2d_Array so we use print_r()

//REQUEST method is use for both get method or post method we do not know which methor is use my parter
echo $_REQUEST['name'].'<br>';
echo $_REQUEST["gander"].'<br>';


//print_r($_FILES['filename']);

print_r($_FILES['filename']['name']); //2nd['predefine keyword'] name ,size...etc















?>

