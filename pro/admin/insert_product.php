<?php
require_once "db_connection.php";

?>
<?php
if(isset($_POST['pro_title'])) {
    $title=$_POST['pro_title'];
    $cat=$_POST['pro_cat'];
    $brand=$_POST['pro_brand'];
    $price=$_POST['pro_price'];
    $desc=$_POST['pro_desc'];
    $keywords=$_POST['pro_kw'];
    $queryProSet="INSERT INTO `products` (`pro_id`, `pro_title`, `pro_cat`, `pro_brand`, `pro_price`, `pro_desc`, `pro_image`, `pro_keywords`) VALUES (NULL, '$title', '$cat', '$brand', ' $price', '$desc', '', '$keywords')";
    $connectedq=mysqli_query($con,$queryProSet);
    if(!isset($connectedq))
    {
        echo "nnot connected";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Product</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
    <style>
        * {
            font-family: 'Old Standard TT', serif;
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="text-center my-4"><i class="fas fa-plus fa-md"></i> <span class="d-none d-sm-inline"> Add New </span> Product </h1>
    <form action="insert_product.php" method="post">
        <div class="row">
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                <label for="pro_title" class="float-md-right"> <span class="d-sm-none d-md-inline"> Product </span> Title:</label>
            </div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-file-signature"></i></div>
                    </div>
                    <input type="text" class="form-control" id="pro_title" name="pro_title" placeholder="Enter Product Title" >
                </div>
            </div>
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                <label for="pro_cat" class="float-md-right"><span class="d-sm-none d-md-inline"> Product </span> Category:</label>
            </div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4 mt-3 mt-lg-0">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-list-alt"></i></div>
                    </div>
                    <select class="form-control" id="pro_cat" name="pro_cat">
                        <option>Select Category</option><!--
                        <option>Mobile</option>
                        <option>Laptop</option>
                        <option>Tablet</option>
                        <option>Watch</option>
                        <option>Camera</option>-->
                        <?php
                        global  $con;
                        if(!isset($con))
                            echo "error";
                        $getCatquery="SELECT * FROM `categories`";
                        $connected=mysqli_query($con,$getCatquery);
                        if($connected==true)
                        {
                            while ($queryAns=mysqli_fetch_assoc($connected))
                            {
                                $cat_title=$queryAns['catTitle'];
                                $cat_id=$queryAns['catId'];
                                echo '<option value='.$cat_id.'>'.$cat_title.'</option>';
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                <label for="pro_brand" class="float-md-right"> <span class="d-sm-none d-md-inline"> Product </span> Brand:</label>
            </div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-stamp"></i></div>
                    </div>
                    <select class="form-control" id="pro_brand" name="pro_brand">
                        <option>Select Brand</option><!--
                        <option>Apple</option>
                        <option>Samsung</option>
                        <option>Oppo</option>
                        <option>Dell</option>
                        <option>HP</option>
                        <option>Sony</option>-->
                        <?php

                        global  $con;
                        if(!isset($con))
                        {
                            echo "error";
                        }
                        $getQueryBrands="SELECT * FROM `Brands` WHERE 1";
                        $connectQueryWithDb=mysqli_query($con,$getQueryBrands);
                        if($connectQueryWithDb==true)
                        {
                            while($result=mysqli_fetch_assoc($connectQueryWithDb))
                            {
                                $brandTitle=$result['brandTitle'];
                                $brandId=$result['brandId'];
                                echo '<option value='.$brandId.'>'.$brandTitle.'</option>';
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                <label for="pro_img" class="float-md-right"><span class="d-sm-none d-md-inline"> Product </span> Image:</label>
            </div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4 mt-3 mt-lg-0">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="far fa-image"></i></div>
                    </div>
                    <input class="form-control" type="file" id="pro_img" name="pro_img">
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                <label for="pro_price" class="float-md-right"> <span class="d-sm-none d-md-inline"> Product </span> Price:</label>
            </div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-money-bill"></i></div>
                    </div>
                    <input class="form-control" id="pro_price" name="pro_price" placeholder="Enter Product Price">
                </div>
            </div>
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                <label for="pro_kw" class="float-md-right"><span class="d-sm-none d-md-inline"> Product </span> Keyword:</label>
            </div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4 mt-3 mt-lg-0">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-key"></i></div>
                    </div>
                    <input class="form-control" type="text" id="pro_kw" name="pro_kw" placeholder="Enter Product Keywords">
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                <label for="pro_desc" class="float-md-right"><span class="d-sm-none d-md-inline"> Product </span> Detail:</label>
            </div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="far fa-comment-alt"></i></div>
                    </div>
                    <textarea class="form-control" type="file" id="pro_desc" name="pro_desc" placeholder="Enter Product Detail"></textarea>
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto"></div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                <button type="submit" class="btn btn-primary btn-block" name="submitBtn"><i class="fas fa-plus"></i> Insert Now </button>
            </div>
        </div>
    </form>
</div>
</body>
</html>