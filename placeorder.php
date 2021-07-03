<?php
 
?>
<!doctype html>
<html lang="en">

<head>
    <title>Place Order</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style>
    body {
        background: url(https://images.pexels.com/photos/5717993/pexels-photo-5717993.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
        /* background-attachment: fixed; */
        background-size: cover;
        width: 100%;
    }

    .main {
        width: 35%;
        margin: auto;
        padding: 2rem;
        background-color: rgba(255, 255, 255, 0.5);
        border-radius: 5px;
        box-shadow: 0px 0px 3px gray;
       margin-top:5rem;
    }

    input {
        margin: 1rem 0;
    }
    </style>
 
    <!-- <div class="main"> -->
    <form  method="POST" class="main">
        <h1>Fill out Delivery Details</h1>
        <label for="">Name</label>
        <input name="sellername" required class="form-control" placeholder="Enter your name" type="text">
        <label for="">Email</label>
        <input name="selleremail" required class="form-control" placeholder="Enter your Email" type="text">
        <label for="">Address</label>
        <input name="sellercity" required class="form-control" placeholder="Enter your address" type="text">
        <label for="">Zip code </label>
        <input name="sellerpincode" required class="form-control" placeholder="Enter your zip code" type="text">
  
        
        <button type="submit" name="submit" required class="btn btn-primary btn-block mt-5">Place Order</button>
   </form>
    </div>

    <?php
    
    include "./config.php";
error_reporting(0);
session_start();
/////////////////mobile nunber validaio
$user_id= $_SESSION['user_id'];
    // echo $user_id;
 $product_id= $_GET['product'];
//   echo $product_id;
//   include "./asset/config.php";
// if(!empty($_POST['sellername']&&$_POST['selleremail']&&$_POST['sellercity']&&$_POST['sellermobile']&&$_POST['sellerpincode'])&&$_POST['password']&&$mobile_error==""){
  $sellername=$_POST['sellername'];
  $selleremail=$_POST['selleremail'];
  $sellercity=$_POST['sellercity'];
  $sellermobile=$_POST['sellermobile'];
  $sellerpincode=$_POST['sellerpincode'];
  if(!isset($user_id)){
    header("Location:./user/userlogin.php");
  }
  else{


  if(isset($_POST['submit'])){
  $insertquery="INSERT INTO ORDERS VALUES('$seller_acc_id','$sellername','$selleremail','$sellercity','$sellerpincode','$product_id','$user_id')";
  $query=mysqli_query($conn,$insertquery);
  if(!$query){
      echo "<h1 style='color:red'>error</h1>";
  }
 
  else{
      header('Location:./placed.php');
  }
}
// }
}
    
    ?>
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