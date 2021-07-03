<!-- <div style="position:absolute">Developed By Purushottam Rede</div> -->
<?php
session_start();
error_reporting(0)           ;
// print_r($_SESSION);
require "./config.php";
print_r($_POST['submit']);
   $username_error="";
   $password_error="";
   $username=$_POST['username'];
   $password=$_POST['password'];
//    echo $username;
    // echo $username."<br>".$password;
    // if(!empty($_POST['username'])&& !empty($_POST['password'])){
     
            

        if(!empty($_POST['username'])&&!empty($_POST['password'])){
       
        $findidquery="SELECT id FROM sellermycart WHERE SELLERMOBILE='".$username."' and SPASSWORD ='".$password."'  ";
        $findqueryfire=mysqli_query($conn,$findidquery);
        if($findqueryfire){
            // echo "succccccccccccccccccccewesdf";
        }
        else{
            echo "Error Occured";
        }
        while($idres=mysqli_fetch_array($findqueryfire)){
            $_SESSION["seller_id"] = $idres['id'];
           $seller_acc_id= $_SESSION["seller_id"] ;
            echo $seller_acc_id;
        }

     
        $selectquery="SELECT * FROM sellermycart WHERE SELLERMOBILE='".$username."' and SPASSWORD ='".$password."' ";
        $query=mysqli_query($conn,$selectquery);

        $count  = mysqli_num_rows($query);
        // echo $count;
       if($count==1){
           $_SESSION['login']=true;
                header("Location:./sellerdashboard.php");

       }
        // while($res=mysqli_fetch_assoc($query)){
        //     if($username==$res['SELLERMOBILE']&&$password==$res['PASSWORD']){
        //         header("Location:./sellerdashboard.php");
        //         $_SESSION['login']=true;
        //     }
        // }

        //storing data in session variable

        // $findidquery="SELECT id FROM sellermycart WHERE SELLERMOBILE='".$username."' and SPASSWORD ='".$password."'  ";
        // $findqueryfire=mysqli_query($conn,$findquery);
        // echo "<h1 class='text-dark'>".$findidquery."</h1>";

        
    }
   
?>
<!doctype html>
<html lang="en">
  <head>
    <title>ADMIN</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body{
            color:white;
            margin:0;
            padding:0;
            background:linear-gradient(200deg, blue,pink);
            background-repeat:no-repeat;
            background-size:cover;
            width:100vw;
            box-sizing: border-box;
            font-size:16px;
            overflow: hidden;
            /* height:50vh; */
        }

        .adminpage{
        
        }
        #form_div{
     
        padding:2rem;

        }
        .form_box{
            background: rgba( 255, 255, 255, 0.25 );
            box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
            -webkit-backdrop-filter: blur( 4px );
            border-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );  

        }
        .background{
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
        }
        .svg{
            position: absolute;
            bottom: 0;
            z-index:-10;
        }
    


        @media(max-width:739px){
            .form_box{
                width:80vw;
            }
        }

        @media(max-width:450px){
            .seller_text{
                font-size:1.5rem;
            }
        }
    </style>
  </head>
  <body>
  <!-- <div style="color:white">Developed By Purushottam Rede</div> -->
  <div class="background">
  <div class="form_box">
      <div class="adminpage">
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">
    <div style="">
    <!-- <div> 
    <img src="../../computer.jpg" alt="">
    </div> -->
    <div id="form_div">
    <h1 class="seller_text"> Seller Login Here !</h1>

        <label for="#username">Enter Mobile No.</label>
        <input type="text" name="username" id="username" class="form-control mb-1" placeholder="Enter Username">
        <span><?php echo $username_error ?></span>

        <!-- <br> -->
        <label for="#password">Enter Password</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password">
        <span><?php echo $password_error ?></span>

        <br>
        <button class="btn btn-primary btn-block text-light mb-2" type="submit">Log In</button>
        <a href="./sellersignup.php" class="btn btn-danger btn-block text-light" >Sign Up</a>
        <?php
    if(!empty($_POST['username'])&& !empty($_POST['password'])){
        if($count==0){
            echo "<div class='alert alert-danger mt-2'>wrong mobile number or password</div>";
        }
    }?>
        </div>
        </div>
         
    </form>
      </div>
      </div>
      <!-- <svg class="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,96L48,96C96,96,192,96,288,128C384,160,480,224,576,229.3C672,235,768,181,864,144C960,107,1056,85,1152,90.7C1248,96,1344,128,1392,144L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg> -->
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>