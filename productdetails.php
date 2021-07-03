<?php
session_start();
include "./config.php";

?>
<!doctype html>
<html lang="en">

<head>
    <title>ProductDetails</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/jpg" href="./images/watch1.jpeg" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <style>
    .product {
        display: flex;
    }

    .product-1 {
        /* width: 50rem; */
        display: flex;
        flex-direction: column;
        border: 2px solid #bbb;
        margin: 7rem 2rem;
    }

    .product-2 {
        /* width: 50vw;
         */
        margin: 7rem 2rem;

    }
    </style>
    <?php 
    $product=$_GET['product'];
    // echo $product;
    $productid=$_GET['product'];
    // echo $productid;
    $selectproduct="SELECT * FROM PRODUCTS WHERE id=$productid";
    $selectproductfire=mysqli_query($conn,$selectproduct);
    while($res=mysqli_fetch_array($selectproductfire)){
echo 
    "<div class='product'>
        <div class='product-1'>
            <img src='{$res['img']}' alt='' style='width:40rem;'>
            <div class='d-flex'>
            <a href='./placeorder.php?product={$res["id"]}' class='btn btn-warning btn-block'>Buy Now</a>
            </div>
        </div>
        <div class='product-2'>
            <h2>{$res['title']}</h2>
            <h5><i class='fa fa-bolt text-danger p-1' aria-hidden='true' ></i>{$res['shortdescr']}</h5>
            <h3><i class='fa fa-inr p-2' aria-hidden='true'></i>{$res['price']}</h3>
            <div>{$res['descr']}</div>
            <div>
            <h5>Available Offers</h5>
            <div><i class='fa fa-tag text-success py-2' aria-hidden='true'></i>  Bank Offer5% Unlimited Cashback on Flipkart Axis Bank Credit Card<a href='' class='text-primary px-1'>T&C</a></div>
            <div><i class='fa fa-tag text-success py-2' aria-hidden='true'></i>Bank Offer10% Off on Bank of Baroda Mastercard debit card first time transaction<a href='' class='text-primary px-1'>T&C</a></div>
            <div><i class='fa fa-tag text-success py-2' aria-hidden='true'></i>Special PriceGet extra 10% off (price inclusive of discount)<a href='' class='text-primary px-1'>T&C</a></div>
            <div><i class='fa fa-calendar-check-o text-primary py-2' aria-hidden='true'></i>No Cost EMI on Bajaj Finserv EMI Card on cart value above ₹4499<a href='' class='text-primary px-1'>T&C</a></div>
            
            </div>
        </div>
    </div>";
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