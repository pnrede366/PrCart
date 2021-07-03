<?php
include "./config.php";  
error_reporting(0);
// if(isset($seller_acc_id)){
session_start();
//   echo $_SESSION["seller_id"] ;
//   print_r($_SESSION);
  $seller_acc_id= $_SESSION["seller_id"] ;

  // $seller_acc_id= $_GET['seller_acc_id'];
  // echo $seller_acc_id;
  if(!isset($seller_acc_id)){
    header("Location:./loginseller.php");
    

  }
  $mobile_error="";
  if(isset($_POST['submit'])){
    if(empty($_POST['sellermobile'])){
      $mobile_error="<p class='text-danger' style='position:absolute'>Please enter mobile !<p/>";
    }
    else{
      $mob = $_POST['sellermobile'];
      if(!preg_match("/^[6-9]\d{9}$/",$mob)){
        $mobile_error="<p class='text-danger' style='position:absolute'>Please enter 10 digit mobile number!<p/>";
    
      }
      }
    
    }
  //  $seller_acc_id=$_GET['seller_acc_id'];
//    echo $seller_acc_id;
   if($seller_acc_id==""){
     echo "error";
   }
   else{
   $showproduct="SELECT * FROM SELLERMYCART WHERE id=$seller_acc_id";
      $showproductfire=mysqli_query($conn,$showproduct);
      

      while($productres=mysqli_fetch_array($showproductfire)){
      // echo $productres['name'];
        // print_r($productres);
      $seller_name=  $productres['SELLERNAME'];
      $seller_email=  $productres['SELLEREMAIL'];
      $seller_city= $productres['SELLERCITY'];
      $seller_mobile=  $productres['SELLERMOBILE'];
      $seller_pincode=  $productres['SELLERPINCODE'];
      $seller_sellerpassword=  $productres['SPASSWORD'];
    //   echo $seller_name."dddddddddd";
  
      }}
?>
<?php
// session_start();

error_reporting(0);

if(isset($_POST['submit'])){
 



// $updateselectquery="SELECT * FROM usersignup WHERE id=$seller_acc_id";
// $updateselectqueryfire=mysqli_query($conn,$updateselectquery);
//   include "./asset/config.php";
  $sellername=$_POST['sellername'];
  $selleremail=$_POST['selleremail'];
  $sellercity=$_POST['sellercity'];
  $sellermobile=$_POST['sellermobile'];
  $sellerpincode=$_POST['sellerpincode'];
  $password=$_POST['password'];
  $insertquery="UPDATE SELLERMYCART SET SELLERNAME='$sellername',SELLEREMAIL='$selleremail',SELLERCITY='$sellercity',SELLERMOBILE='$sellermobile',SELLERPINCODE='$sellerpincode',SPASSWORD='$password' WHERE ID=$seller_acc_id";
  $query=mysqli_query($conn,$insertquery);
  if($query){
    header("location:./logout.php");
  }
  else{
    $exists="<h6 class='alert alert-danger m-1' style=''>Mobile Number Already Exists<h6>";
  }
}
// header("Location:./seller.php");


//  ?>

<!doctype html>
<html lang="en">

<head>
    <title>My Account Update</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <style>
    body {
        background: url("https://images.pexels.com/photos/1103970/pexels-photo-1103970.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
        background-size: cover;
        width: 100%;
        /* color:white; */
        background-position: left;
        /* overflow: hidden; */

    }

    /* label{
              padding:0 2rem;
          } */
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }

    form {
        /* margin:2rem; */

        background: rgba(255, 255, 255, 0.25);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        -webkit-backdrop-filter: blur(4px);
        border-radius: 10px;
        border: 1px solid rgba(255, 255, 255, 0.18);
        width: 50%;

    }

    /* .eachdiv{
              margin:2rem;
          } */
    .left {
        width: 50%;
        margin: 2rem;

    }

    .right {
        width: 50%;
        margin: 2rem;

    }

    h1 {
        display: flex;

    }

    .cardseller {
        height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .main {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    </style>
    <!-- <div class="text-light">Developed By Purushottam Rede</div> -->
    <div class="cardseller">
        <h1 class="text-light"> My Account Update<i class="fa fa-cart-plus p-1" aria-hidden="true"></i></h1>

        <form action="" method="POST">
            <div class="main">
                <div class="left">
                    <div class="eachdiv">

                        <label for="">Name</label><br>
                        <input class="form-control" type="text" value="<?php  echo $seller_name?>"
                            placeholder="Enter your name" name="sellername">
                    </div>
                    <br>
                    <div class="eachdiv">
                        <label for="">City</label><br>
                        <input class="form-control" value="<?php   echo  $seller_city?>" type="text"
                            placeholder="enter your city" name="sellercity">
                    </div>
                    <br>
                    <div class="eachdiv"><label for="">Pincode</label><br>
                        <input class="form-control" value="<?php   echo  $seller_pincode?>" type="text"
                            placeholder="enter pincode" name="sellerpincode">
                    </div>
                    <br>

                </div>
                <div class="right">

                    <div class="eachdiv">
                        <label for="">Email</label><br>
                        <input class="form-control" value="<?php   echo  $seller_email?>" type="email"
                            placeholder="enter your email" name="selleremail">
                    </div>
                    <br>
                    <div class="eachdiv">
                        <label for="">Mo.no</label><br>
                        <input class="form-control" value="<?php   echo  $seller_mobile?>" type="text"
                            placeholder="enter your mobile number" name="sellermobile">
                        <?php echo $mobile_error?>
                    </div>

                    <br>
                    <div class="eachdiv">
                        <label for="">Create a Password</label><br>
                        <input value="<?php   echo  $seller_sellerpassword?>" type="text" name="password"
                            class="form-control" placeholder="write about your product">
                    </div>

                    <br>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-center">
                <button name="submit" class="btn btn-dark mb-2 mx-2" style="width:10rem">
                    Sign Up
                    </a>
                </button>
                <a href="./loginseller.php" class="btn btn-success mb-2" style="width:10rem"> Log In</a>
            </div>
            <?php
// if(!$query){
  echo $exists; 
// }?>
            <?php
                         
                
                ?>

        </form>
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