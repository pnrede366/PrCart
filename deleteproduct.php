<?php
include "./config.php";
$idofproduct=$_GET['product_ids'];
$path=$_GET['path'];
    echo $idofproduct;
$updatequery="DELETE FROM PRODUCTS WHERE id=$idofproduct";
$updatequeryfire=mysqli_query($conn,$updatequery);
if($updatequery){
    unlink($path);
    header("Location:./sellerdashboard.php");
}
else{
    echo "fail";
}

?>