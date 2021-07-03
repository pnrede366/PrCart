<?php
$conn=mysqli_connect("localhost","root","","user");
if($conn){
    echo "connection successfull";
}
else{
    echo "error";
}
//   include "./asset/config.php";
  $sellername=$_POST['sellername'];
  $selleremail=$_POST['selleremail'];
  $sellercity=$_POST['sellercity'];
  $sellermobile=$_POST['sellermobile'];
  $sellerpincode=$_POST['sellerpincode'];
  $sellerdescr=$_POST['sellerdescr'];
  // $selectquery="SELECT * FROM SELLERNEW WHERE EXISTS(SELECT * FROM SELLERNEW WHERE SELLERMOBILE=$sellermobile";

  // $selectqueryresult=mysqli_query($conn,$selectquery);
  // if($selectqueryresult){
    // echo "<div class='text-light'>".$sellername."</div>";
    
  // }
  // session_start();

  // if( $_SESSION['submit'] == $_POST['submit'] && isset($_SESSION['submit'])){
  //     // user double submitted 
  // }
  // else {
  //     // user submitted once
  //     $_SESSION['submit'] = $_POST['submit'];        
  // } 

  // if(!empty($_POST['sellermobile'])){
  //   while($res  = mysqli_fetch_array($selectqueryresult)){

      
  //   }
  // echo "<h1 style='color:white'>".$res['SELLERMOBILE']."</h1>";
  // if($res['SELLERMOBILE']===$sellermobile){
  //  echo "<h1 style='color:white'> matched </h1>";

  // echo "<div class='text-light'>".$sellername."</div>";
  // if(!empty($sellermobile)){
    $insertquery="INSERT INTO SELLERMYCART VALUES('','$sellername','$selleremail','$sellercity','$sellermobile','$sellerpincode','$sellerdescr')";
    $query=mysqli_query($conn,$insertquery);
    if(!$query){
        echo "<h1 style='color:white'>error</h1>";
    }
        header("Location:./seller.php");
  // }
// }
// header('location:seller.php');





?>