<?php
include "../config.php";  

// if(isset($user_id)){
session_start();
  $user_id= $_SESSION['user_id'];
  if(!isset($user_id)){
    header("Location:./userlogin.php");
  }
  if(!isset($user_id)){
    header("location:./userlogin.php");
  }
  //  $user_id=$_GET['user_id'];
   if($user_id==""){
     echo "error";
   }
   else{
   $showproduct="SELECT * FROM usersignup WHERE id=$user_id";
      $showproductfire=mysqli_query($conn,$showproduct);
      if($showproductfire){
        // echo "mmmmmmmmmmmmmmmm";
      }

      while($productres=mysqli_fetch_array($showproductfire)){
    
      $user_name=  $productres['name'];
      $user_email=  $productres['email'];
      $user_city= $productres['city'];
      $user_mobile=  $productres['mobile'];
      $user_pincode=  $productres['pincode'];
      $user_userpassword=  $productres['userpassword'];
  
      }}
?>
<?php
// session_start();

error_reporting(0);

if(isset($_POST['submit'])){
 



// $updateselectquery="SELECT * FROM usersignup WHERE id=$user_id";
// $updateselectqueryfire=mysqli_query($conn,$updateselectquery);
//   include "./asset/config.php";
  $sellername=$_POST['sellername'];
  $selleremail=$_POST['selleremail'];
  $sellercity=$_POST['sellercity'];
  $sellermobile=$_POST['sellermobile'];
  $sellerpincode=$_POST['sellerpincode'];
  $password=$_POST['password'];
  $insertquery="UPDATE USERSIGNUP SET name='$sellername',email='$selleremail',city='$sellercity',mobile='$sellermobile',pincode='$sellerpincode',userpassword='$password' WHERE ID=$user_id";
  $query=mysqli_query($conn,$insertquery);
  if($query){
    header("location:./userlogin.php");
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
                        <input class="form-control" type="text" value="<?php  echo $user_name?>"
                            placeholder="Enter your name" name="sellername">
                    </div>
                    <br>
                    <div class="eachdiv">
                        <label for="">City</label><br>
                        <input class="form-control" value="<?php   echo  $user_city?>" type="text"
                            placeholder="enter your city" name="sellercity">
                    </div>
                    <br>
                    <div class="eachdiv"><label for="">Pincode</label><br>
                        <input class="form-control" value="<?php   echo  $user_pincode?>" type="text"
                            placeholder="enter pincode" name="sellerpincode">
                    </div>
                    <br>

                </div>
                <div class="right">

                    <div class="eachdiv">
                        <label for="">Email</label><br>
                        <input class="form-control" value="<?php   echo  $user_email?>" type="email"
                            placeholder="enter your email" name="selleremail">
                    </div>
                    <br>
                    <div class="eachdiv">
                        <label for="">Mo.no</label><br>
                        <input class="form-control" value="<?php   echo  $user_mobile?>" type="text"
                            placeholder="enter your mobile number" name="sellermobile">
                    </div>

                    <br>
                    <div class="eachdiv">
                        <label for="">Create a Password</label><br>
                        <input value="<?php   echo  $user_userpassword?>" type="text" name="password"
                            class="form-control" placeholder="write about your product">
                    </div>

                    <br>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-center">
                <button name="submit" class="btn btn-success mb-2 mx-2" style="width:10rem">
                    Save
                    </a>
                </button>
                <a href="./logout.php" class="btn btn-danger mb-2" style="width:10rem"> Log Out</a>
            </div>
            <?php
// if(!$query){
  echo $exists; 
// }?>
            <?php
                         
                
                ?>

        </form>
    </div>


    <div>
    <style>
    .product_btn:hover{
            text-decoration:none;
            color:gray;
    }
    </style>
    <h2 style="color:white;disply:inline-block;text-align:center;margin:2rem">Your Orders</h2>

    <?php
      $showproduct="SELECT * FROM ORDERS WHERE userid=$user_id";
      $showproductfire=mysqli_query($conn,$showproduct);
      $i=0;     
      while($productres=mysqli_fetch_array($showproductfire)){

                $id=$productres["product"];
                // echo $productres['email'];
                $order="SELECT * FROM PRODUCTS WHERE id='$id'";
                $showorder=mysqli_query($conn,$order);
          
                while($orderres=mysqli_fetch_array($showorder)){
                    $src= "./user".$orderres['img'];
                    echo "
                    <a href='../productdetails.php?product={$orderres["id"]}' class='product_btn'>
                    <div class='showproduct ' style='width:20rem;padding:1rem;margin:0 10rem;color:white;text-decoration:none;
                           background: rgba( 255, 255, 255, 0.25 );
                           box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
                           backdrop-filter: blur( 4px );
                           -webkit-backdrop-filter: blur( 4px );
                           border-radius: 10px;
                           border: 1px solid rgba( 255, 255, 255, 0.18 );'>
            
            "
            ."<h5>".$orderres['title']."</h5>".
            "<h5>Price:".$orderres['price']."</h5>".
            "
            </div>
            </div>
            </div>
            </a>
            <br>
        ";
    }
}

// http://localhost/myphp/mycart/productdetails.php?product=59
// http://localhost/myphp/mycart/user/productdetails.php?product=49
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