<?php
include "./config.php";
error_reporting(0);
session_start();

// print_r($_SESSION);

$tem=$_FILES['avatar']['tmp_name'];
$nm=$_FILES['avatar']['name'];
$path="./images/".$nm;
// $img="./images/".$nm;
move_uploaded_file($tem,$path);
// $seller_acc_id=$_GET['seller_acc_id'];
$seller_acc_id= $_SESSION["seller_id"] ;



if(!isset($_SESSION['login'])){
    header("Location:loginseller.php");
}

//  echo "this is seller id". $_SESSION["seller_id"];
$avatar=$_POST['avatar'];
$title=$_POST['title'];
$descr=$_POST['descr'];
$shortdescr=$_POST['shortdescr'];
$price=$_POST['price'];
$stock=$_POST['stock'];

$seller_id=$_SESSION["seller_id"];
if(!empty($_POST['title'])&&!empty($_POST['shortdescr'])&&!empty($_POST['descr'])&&!empty($_POST['price'])&&!empty($_POST['stock'])){
    
    $productquery="INSERT INTO PRODUCTS VALUES ('','$path','$title','$shortdescr','$descr','$price','$stock','$seller_id')";
    
    $productqueryfire=mysqli_query($conn,$productquery);
    
    if($productqueryfire){
        echo "product is uploaded";
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <title>Seller Dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <h1 style="color:gray;disply:inline-block;text-align:center;margin:2rem">Seller Dashboard</h1>

    <style>
    form{
        margin:auto;
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
            }
            .showproduct {
        width: 100%;
        border: 2px solid gray;
        padding: 1rem;

    }

    .showproduct img {
        /* margin-left:25%; */
    }

    .main {
        display: inline-block;
        margin: 1rem;
        max-width: 100%;
        position: relative;
    }
         
    </style>

    <div>
        <!-- <a href="" onclick="" class="btn btn-danger">Log out</a> -->
        <div id="addProduct" class="container">
            <div>
                <form method="POST" enctype="multipart/form-data">
                    <br>
                    <label for="">Slect file</label>
                    <input type="file" name="avatar" class="" placeholder="" required>
                    <br>
                    <br>
                    <input type="text" name="title" required placeholder="title">
                    <br> <br>
                    <input type="text" name="shortdescr" id="" required placeholder="short descr">
                    <br> <br>

                    <input type="text" name="descr" id="" required placeholder="specification">
                    <br> <br>
                    <input type="number" name="price" required placeholder="price">
                    <br>
                    <br>
                    <input type="text" name="stock" required placeholder="stock">
                    <br>
                    <br>
                    <button type="submit" name="submit" class="btn btn-success">Upload Product</button>
                </form>
            </div>
        </div>
    </div>
    <hr>
    <style>
    
    </style>
      <h2 style="color:gray;disply:inline-block;text-align:center;margin:2rem">Your Uploaded Products</h2>
    <?php
      $showproduct="SELECT * FROM PRODUCTS WHERE product_id=$seller_id";
      $showproductfire=mysqli_query($conn,$showproduct);
      if($showproductfire){
          // echo "mmmmmmmmmmmmmmmm";
        }
        
        while($productres=mysqli_fetch_array($showproductfire)){
            
            
            
            echo "<div class='main'>
            <div class='showproduct ' style='width:20rem;'>
            
            <img src='".$productres['img'] ."'alt='' style='max-width:100%;height:100px'>
            <hr> "."<h5>".$productres['title']."</h5><hr>".
            "<div>".$productres['shortdescr']."</div><hr>".
            "<div>About:".$productres['descr']."</div><hr>".
            "<h5>Price:".$productres['price']."</h5><hr>".
            "<h5>".$productres['stock']."<h5/>".
            "
            <div class='d-flex justify-content-end'>
            <a href='./editproduct.php?product_img={$productres['img']}&&product_title={$productres['title']}&&product_descr={$productres['descr']}&&product_price={$productres['price']}&&product_stock={$productres['stock']}&&idofproduct={$productres['id']}'><i class='fa fa-pencil-square-o text-success p-2' aria-hidden='true'></i></a>
            <a href='./deleteproduct.php?product_ids={$productres['id']}&&path={$productres['img']}'><i class='fa fa-trash-o text-danger p-2' aria-hidden='true'></i></div></a>
            </div>
            </div>
            
            ";
        }
        ?>
     
     <br> 
        <div style="margin:3rem;width:15rem;">
          <a href="./logout.php" class="btn btn-danger btn-block">log out</a>
           <?php 
        echo "<a href='./selleraccount.php' class='btn btn-success btn-block'>Seller Account Update</a>";
        ?>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>