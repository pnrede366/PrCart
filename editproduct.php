<?php
require('./config.php');
error_reporting(0);
session_start();

$idofproduct=$_GET['idofproduct'];
$product_img=$_GET['product_img'];
$product_title=$_GET['product_title'];
$product_descr=$_GET['product_descr'];
$product_price=$_GET['product_price'];
$product_stock=$_GET['product_stock'];

// $update_idofproduct=$_GET['update_idofproduct'];
$update_product_img=  $_POST['updateimg'];
$update_product_title=$_POST['updatetitle'];
$update_product_descr=$_POST['updatedescr'];
$update_product_price=$_POST['updateprice'];
$update_product_stock=$_POST['updatestock'];

// echo $idofproduct.$product_img.$product_title.$product_stock;
    if(isset($_POST['submit'])){
                $updatequery="UPDATE PRODUCTS SET  title='$update_product_title', descr='$update_product_descr', price='$update_product_price', stock='$update_product_stock'  WHERE id='$idofproduct'";
    $updatequeryfire=mysqli_query($conn,$updatequery);
    if($updatequeryfire){
        header('location:./sellerdashboard.php');
    }
    else{
        echo "error";
    }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<style>
   form{
        margin:2rem;
        width:50%;
        padding: 3rem;
         background: rgba( 255, 255, 255, 0.25 );
        box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
        -webkit-backdrop-filter: blur( 4px );
        border-radius: 10px;
        border: 1px solid rgba( 255, 255, 255, 0.18 );
                
            }
            form input{
                width:100%;
                border:none;
                    border-bottom:1px solid #757575;
            }
            textarea{
                width:100%;
                outline:none;

            }

            input{
                outline:none;
            }</style>
<div>
        <div id="addProduct" class="container">
            <div>
            <form method="POST" enctype="multipart/form-data">
            <br>
            <img src="<?php echo $product_img?>" alt="" style='width:200px'>
            <br>
            <label for="">Select file</label>
            <!-- <?php echo $product_img?> -->
            <input type="file" name="avatar" value=<?php $product_img?> class="" placeholder="" >
            <br>
            <br>
            <input value='<?php echo $product_title?>' type="text" name="updatetitle"  placeholder="title" >
            <br>            <br>

            <input value='<?php echo $product_descr?>' type="text" name="updatedescr" id=""  placeholder="descr">
            <br>            <br>

            <input value='<?php echo $product_price?>' type="number" name="updateprice"  placeholder="price">
            <br>
            <br>
            <input value='<?php echo $product_stock?>' type="text" name="updatestock"  placeholder="stcok">
            <br>
            <br>
            <button type="submit" name="submit" class="btn btn-success">Update Product</button>
            </form>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>
