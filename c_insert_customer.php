<?php

    include "connection.php";
    session_start();

    
    if(isset($_POST['submit'])){

    $c_name = $_POST["c_name"];
    $c_phone = $_POST["c_phone"];
    $c_email = $_POST["c_email"];
    $c_address = $_POST["c_address"];
    $c_state = $_POST["c_state"];
    $phone=$_SESSION['phone'];
    


   
    $checkuser="SELECT * FROM customer_info WHERE `C_PHONE` ='$c_phone' OR `C_EMAIL`='$c_email'";
echo "hi";

    $result=mysqli_query($conn,$checkuser);
    $row=mysqli_num_rows($result);
    if($row==1){
        echo '<script>
          
          alert("Mobile Number or Email are alredy registered")</script>';
    }

    
   else{

    $sql= "INSERT INTO customer_info VALUES ('$c_name','$c_phone','$c_email','$c_address','$c_state','$phone')";

    mysqli_query($conn,$sql);
    
   echo "<script>alert('data success')</script>";
   header("location:customers.php");
  
   
   }

}

?>



   