<?php
 include "connection.php";
 session_start();
 if(isset($_SESSION['phone'])) {
    $phone=$_SESSION['phone'];
   


    $c_phone=$_SESSION['c_phone'];
    
    $dcql="DELETE FROM `customer_info` WHERE C_PHONE='$c_phone' AND PHONE='$phone'";
    
    mysqli_query($conn,$dcql);
    header("location:delete_customer.php");
 }
 ?>