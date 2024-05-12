<?php
 include "connection.php";
 session_start();
 if(isset($_SESSION['phone']))  {
    $phone=$_SESSION['phone'];
    $pwd=$_SESSION['pwd'];
    $c_name=$_SESSION['c_name'];

    $sql="SELECT * FROM customer_info WHERE C_NAME='$c_name'";

    $result=mysqli_query($conn,$sql);

    $row=mysqli_fetch_assoc($result);
    $c_phone=$row['C_PHONE'];
    $c_name_=$row['C_NAME'];


 }

   if(isset($_POST['submit'])){
       $transaction_type=$_POST['transaction_type'];
       $amount=$_POST['amount'];

        $due_date = $_POST['due_date'];
        $description = $_POST['description'];

        $current_date=date('Y-m-d');

        $sql="INSERT INTO `transaction_info`(`C_NAME`, `TRANSACTION_TYPE`, `AMOUNT`, `TRANSACTION_DATE`, `DUE_DATE`, `DESCRIPTION`, `C_PHONE`, `PHONE`) VALUES
         ('$c_name_','$transaction_type ','  $amount','$current_date','$due_date',' $description','$c_phone',' $phone')";

         mysqli_query($conn,$sql);
         

         echo "<script>";
echo "alert('Record saved');";
echo "location.href='manage_transaction.php'";
echo "</script>";

        
   }


   ?>
