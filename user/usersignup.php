<?php 
// include "./insertseller.php";
  // include "./config.php";
// if(isset($_POST['sellermobile'])){
  // $mobile=$_POST['sellermobile'];

// }  
?>
<?php
// session_start();
include "../config.php";
error_reporting(0);

// if(isset($_POST['submit'])){
//   $_POST['sellermobile']==null;
//     // user double submitted 
// }

$mobile_error="";
if(isset($_POST['submit'])){
  if(empty($_POST['sellername'])){
    $name_error="<p class='text-danger' style='position:absolute'>Please enter name !<p/>";
  }
  if(empty($_POST['sellercity'])){
    $city_error="<p class='text-danger' style='position:absolute'>Please enter city !<p/>";
  }
  if(empty($_POST['password'])){
    $password_error="<p class='text-danger' style='position:absolute'>Please enter password !<p/>";
  }
  if(empty($_POST['sellerpincode'])){
    $pincode_error="<p class='text-danger' style='position:absolute'>Please enter pincode !<p/>";
  }
  
  
  }
  
  /////////////////mobile nunber validaio
  
  
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
  
  if(isset($_POST['submit'])){
    if(empty($_POST['selleremail'])){
      $email_error="<p class='text-danger' style='position:absolute'>Please enter email !<p/>";
    }
    else{
      if(!filter_var($_POST['selleremail'],FILTER_VALIDATE_EMAIL))
      {
        $email_error="<p class='text-danger' style='position:absolute'>Please enter valid email !<p/>";
      }
    }
    }
//   include "./asset/config.php";
if(!empty($_POST['sellername']&&$_POST['selleremail']&&$_POST['sellercity']&&$_POST['sellermobile']&&$_POST['sellerpincode'])&&$_POST['password']&&$mobile_error==""){
  $sellername=$_POST['sellername'];
  $selleremail=$_POST['selleremail'];
  $sellercity=$_POST['sellercity'];
  $sellermobile=$_POST['sellermobile'];
  $sellerpincode=$_POST['sellerpincode'];
  $password=$_POST['password'];
  $insertquery="INSERT INTO USERSIGNUP VALUES('','$sellername','$selleremail','$sellercity','$sellermobile','$sellerpincode','$password')";
  $query=mysqli_query($conn,$insertquery);
  if(!$query){
      // echo "<h1 style='color:white'>error</h1>";
  }
}
      // header("Location:./seller.php");


?>
<!doctype html>
<html lang="en">
  <head>
    <title>Sign up</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
      <style>
          body{
              background:url("https://images.pexels.com/photos/1323550/pexels-photo-1323550.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
              background-size:cover;
              width:100%;
              color:white;
              background-position:left;
              overflow: hidden;
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
          form{
              /* margin:2rem; */
             
              background: rgba( 255, 255, 255, 0.25 );
            box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
            -webkit-backdrop-filter: blur( 4px );
            border-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );  
            width:50%;
              
          }
          /* .eachdiv{
              margin:2rem;
          } */
          .left{
              width:50%;
              margin:2rem;
            
          }
          .right{
              width:50%;
              margin:2rem;
              
          }
          h1{
              display:flex;
    
          }
      .cardseller{
          height:100vh;
          display:flex;
          flex-direction:column;
          align-items:center;
          justify-content:center;
      }
      .main{
        display:flex;
              align-items:center;
              justify-content:center;
      }
      </style>
      <!-- <div class="text-light">Developed By Purushottam Rede</div> -->
      <div class="cardseller">
      <h1 class="text-light"> Sign Up <i class="fa fa-cart-plus p-1" aria-hidden="true"></i></h1>      
          <form action="" method="POST">
          <?php
                  if(!empty($sellermobile)){       
                  if(!$query){
                    echo "<div class='alert alert-danger' style=''>Mobile number already exists ⚠️</div>";
                  }}
                  if($query){
                    echo "<div class='alert alert-success' >Registration Successful😃</div>";
                  }
                ?>
   <div class="main">     
         <div class="left">
       <div class="eachdiv">
          
       <label for="">Name</label><br>
              <input  class="form-control" type="text" value="<?php echo $sellername ?>" placeholder="Enter your name" name="sellername">
              <span><?php echo $name_error?></span>
        </div>
              <br>
              <div class="eachdiv">
                  <label for="">City</label><br>
              <input  class="form-control" type="text" placeholder="enter your city" name="sellercity">
              <span><?php echo $city_error ?></span>
            </div>
              <br>
              <div class="eachdiv"><label for="">Pincode</label><br>
              <input  class="form-control" type="text" placeholder="enter pincode" name="sellerpincode">
              <span><?php echo $pincode_error ?></span>
            </div>
              <br>
          
          </div>
          <div class="right">
              
             <div class="eachdiv">
                <label for="">Email</label><br>
                  <input  class="form-control" type="email" placeholder="enter your email" name="selleremail">
                  <span><?php echo $email_error ?></span>
                </div>
              <br>
             <div class="eachdiv">
                 <label for="">Mo.no</label><br>
                 <input  class="form-control" type="number" placeholder="enter your mobile number" name="sellermobile">
                 <span><?php echo $mobile_error ?></span>
                </div>
               
              <br>
            <div class="eachdiv">
                <label for="">Create a Password</label><br>
                <input  type="password" name="password" class="form-control" placeholder="write about your product">
                <span><?php echo $password_error ?></span>
            </div>  
            
            <br>
        </div></div>
        <div  class="d-flex align-items-center justify-content-center" >
        <button name="submit" class="btn btn-dark mb-2 mx-2" style="width:10rem"> Sign Up</button>
        <a href="./userlogin.php" class="btn btn-success mb-2" style="width:10rem"> Log In</a></div>
        <?php
                         
                 
                ?>
   
          </form>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>