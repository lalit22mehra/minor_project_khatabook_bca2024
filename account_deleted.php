<?php
 include "connection.php";
 session_start();
 if(isset($_SESSION['phone']))  {
    $phone=$_SESSION['phone'];
    $pwd=$_SESSION['pwd'];

    $sql="SELECT * FROM user_info WHERE PHONE=$phone";
    $result=mysqli_query($conn,$sql);

    $row=mysqli_fetch_assoc($result);
    
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $del_user="DELETE FROM `user_info` WHERE PHONE='$phone'";
        $del_customer="DELETE FROM `customer_info` WHERE PHONE='$phone'";
        $del_transaction="DELETE FROM `transaction_info` WHERE PHONE='$phone'";
        
        $del_feedback="DELETE FROM `feedback_info` WHERE PHONE='$phone'";
        
        mysqli_query($conn,$del_user);
        mysqli_query($conn,$del_customer);
        mysqli_query($conn,$del_transaction);
        mysqli_query($conn, $del_feedback);

        session_destroy();

        echo "<script> alert('account deleted'); </script>";
        header("location:dashboard.php");

    }



 } 

 ?>