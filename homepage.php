<?php
require("./config.php");
session_start();

error_reporting(0);
    // unlink()
//   print_r($_SESSION); 
    // $user_id="";
    $user_id= $_SESSION['seller_id'];
  // echo $user_id ."as";
    if(isset($user_id)){
   $user_id= $_SESSION['seller_id'];
    }
    if(isset($seller_acc_id)){
      $seller_acc_id= $_SESSION['seller_acc_id'];
       }

     
?>
<!doctype html>
<html lang="en">

<head>
    <title>PrCart</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam&display=swap" rel="stylesheet">
</head>

<body>
    <style>
    * {
        font-family: 'Be Vietnam', sans-serif;
                padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    .f-link{
        color:white;
        text-decoration:none;
    }
    

    .footer {
        /* height:10rem; */
        display: flex;
        justify-content: space-around;
        background-color: rgba(0, 8, 34, 1);
        /* flex-wrap: wrap; */
    }

 

    .product-link {
        color: black;
        text-decoration: none;

    }

</style>
    
 
    <?php
// echo  "<a href='./selleraccount.php' class='btn btn-success'>Seller acc </a>";
?>
    <style>
    .showproduct {
        /* border: 2px solid gray; */
        display: inline-block;
        width: 15rem;
        padding: 1rem;
        display: flex;
        margin:5rem 4rem;
        flex-direction: column;
        border-radius:1rem;
        text-align: left;
        background: rgba( 255, 255, 255, 0.20 );
        box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
        -webkit-backdrop-filter: blur( 3.5px );
        border-radius: 10px;
        border: 1px solid rgba( 255, 255, 255, 0.18 );
    }

    .showproduct:hover{
        transform:translateY(-1rem);
    }

    .product_img{
        height: 10rem;
        max-width:100%;
        margin:0 0 1rem 0;
    }

    .product_title{
        font-size:1.2rem;
        padding: 0.5rem 0;
    }

    .product_price{
        font-size:1.5rem;
        padding:0.5rem 0;
    }

    .product_btn{
        background-color:#fff;
        color:gray;
        text-decoration:none;
    }

    .main {
        /* display:flex; */
        /* flex-wrap:wrap; */
        /* margin:1rem; */
        max-width: 100%;

    }

    .wrapper {
        /* display:inline-grid; */
        /* grid-template-column:1fr 1fr; */
        display: flex;
        flex-wrap: wrap;
    }

    ul {
        list-style-type: none;
    }

    #homepage{
        background-image:linear-gradient(to right,rgba(25,25,255,0.5),rgba(255,25,255,0.5));
        background-size:cover;
        background-repeat:no-repeat;
        background-position:top;

        
    }

    .main_wrapper{
        height: 100vh;
        width: 100%;
        display:flex;
        align-items:center;
        justify-content:space-around;        
        color:grey;
    }

.home-wrapper{
    display:flex;
    flex-direction:column;
    align-items:center;
    
}
    .title_main{
        color:#fff;
        font-size:5rem;
        font-weight:800;
    }

    .text_main{
        color:white;
        font-size:1.5rem;
        width:70%;
        margin:1.5rem 0;

    }

    .btn_main_1{
        border:2px solid white;
        background-color:transparent;
        color:white;
        padding:1rem 3rem;
        font-weight:800;
        margin:0 2rem 0 0;
    }

    .btn_main_2{
        color:black;
        border:2px solid white;
        background-color:#ffe;
        padding:1rem 3.5rem;
        font-weight:800;

    }

    .btn_main_1:hover{
        color:black;
        border:2px solid white;
        background-color:#fff;
        }            

     .btn_main_2:hover{
         color:white;
        border:2px solid white;
        background-color:transparent;
    
    
     }

     .main_wrapper_2{
         background-color:white;
         width:25%;
         padding:2rem;
         height:80vh;
         margin:2rem;
         text-align:center;
         border-radius:0.5rem;
     }   

     .form-control{
         width:100%;
         margin:1rem 0;
         padding:1rem 1rem;
     }
     .send_button{
        border:none;
        color:white;
        border-radius:1rem;
        padding:0.6rem 7rem;
        font-weight:800;
        background-color: #ff80ff;
        box-shadow:0px 0px 10px #ff80ff;
     }

    </style>
<!-- media query here -->

     <style>
     @media(max-width:684px){
        body,html{
         font-size:14px;
        }
     }
     @media(max-width:598px){
        body,html{
         font-size:12px;
        }
     }

     @media(max-width:510px){
         .home-wrapper{
                justify-content:center;
                align-items:center;
                margin:auto;
                text-align:center;
         }
         .title_main{
             width:70%;
             text-align:center;
         }
         .footer{
             display:flex;
             flex-direction:column;
            text-align:center;
         }
         .footer ul{
             margin:2rem 0;
         }
     }
     @media(max-width:437px){
        .title_main{
             width:70%;
             text-align:center;
             font-size:4rem;
        font-weight:700;
         }

     }
     @media(max-width:340px){
        .title_main{
             width:70%;
             text-align:center;
             font-size:3rem;
        font-weight:700;
         }
         .btn_main_1{
      
        padding:1rem 3rem;
        font-weight:600;
        margin:0 2rem 1rem 0;
    }
    .btn_main_2{
    
        padding:1rem 3rem;
        font-weight:600;
        margin:0 2rem 0 0;
    }
    .btn_group{
        display:flex;
        flex-direction:column;
    }
     }

     </style>
    <div id="homepage">
    <nav>
    
    <div class="main">
    <br>
        <ul class="ul" style="display:flex;justify-content:space-around">
            <li class="list-item" style="color:white">Home</li>
            <li class="list-item" ><a style='color:white;text-decoration:none'  href="./sellersignup.php">Be A  Seller</a></li>
            <li class="list-item">
                <?php 
    echo "
        <a class='nav-link' style='color:white;text-decoration:none' href='./user/myaccount.php'>My Account</a>"?>
            </li>
        </ul>




    </div>
    </nav>
    <!-- ----------------------------nav ends here ------------------------------------>
    <section class="main_wrapper">
                <div class="home-wrapper">
                <h1 class="title_main">Shop With PrCart</h1>
                <div class="text_main">Get Flat 10% Cashback On Credit Card </div>
                <br>
                <div class="btn_group">
                <a href="#shop" class="btn_main_1" style="text-decoration:none"> Shop </a>
                <a href="./sellersignup.php" class="btn_main_2" style="text-decoration:none">Join Us</a>
                </div>
                </div>
               
                </div>
    </section>
    </div>
        <?php
      $showproduct="SELECT * FROM PRODUCTS";
      $showproductfire=mysqli_query($conn,$showproduct);
      if($showproductfire){
        // echo "mmmmmmmmmmmmmmmm";
      }
      echo "<div class='wrapper'>";
      while($productres=mysqli_fetch_array($showproductfire)){
    

  
   echo "
   
   <div class='showproduct' id='shop' >
   <a href='./productdetails.php?product={$productres["id"]}' class='product_btn'>
        <img src='".$productres['img'] ."'alt='' class='product_img'>
    "."<h5 class='product_title'>".$productres['title']."</h5>".
        "<h5 class='product_price'><i class='fa fa-inr' aria-hidden='true'></i>".$productres['price']."</h5>".
    "</a>".
        "
      </div>
    ";
      }
      echo "</div>";
      ?>
    </div>
    <footer>
        <div class="footer" style="color:#fff;padding:2rem">
            <div class="col-footer-1">
                <ul>
                    <h5 class="list-heading">Get to Know Us</h5>
                    <li class="know-us-1"><a href="" class="f-link">About Us</a></li>
                    <li class="know-us-2"><a href="" class="f-link">Careers</a></li>
                    <li class="know-us-3"><a href="" class="f-link">Press Realeases</a></li>
                    <li class="know-us-4"><a href="" class="f-link">PrCart Care</a></li>
                    <li class="know-us-5"><a href="" class="f-link">Gift A Smile</a></li>
                </ul>
            </div>
            <div class="col-footer-2">
                <ul>
                    <h5 class="list-heading">Connect with Us</h5>
                    <li class="know-us-1"><a href="" class="f-link">Facebook</a></li>
                    <li class="know-us-2"><a href="" class="f-link">Twitter</a></li>
                    <li class="know-us-3"><a href="" class="f-link">Instagram</a></li>
                    <li>  <a class='nav-link' style='color:white;text-decoration:none' href='./user/myaccount.php'>My Account</a></li>
                </ul>
            </div>
            <div class="col-footer-3">
                <ul>
                    <h5 class="list-heading">Make money with us</h5>
                    <li class="know-us-1"><a href="./sellersignup.php" class="f-link">Sell on PrCart</a></li>
                    <li class="know-us-2"><a href="./loginseller.php" class="f-link">LogIn seller</a></li>
                    <li class="know-us-3"><a href="./selleraccount.php" class="f-link">Seller Account</a></li>
                </ul>
            </div>
   
        </div>
    </footer>
    <div class="credit" style="text-align:center">2021 © PrCart. Developed by <a href="https://www.prdeveloper.tech" target="_blank" > Purushottam Rede</a></div>
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

<!-- id15006306_prcart -->
<!-- id15006306_pnrede366 -->