<?php

    include "connection.php";
    
    if(isset($_POST['submit'])){
    $name = $_POST["name"];
    $age = $_POST["age"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $profession = $_POST["profession"];
    $income = $_POST["income"];
    $state = $_POST["state"];
    $date = date("Y-m-d");

    echo "hi";
   
    $checkuser="SELECT * FROM user_info WHERE `PHONE` ='$phone' OR `EMAIL`='$email'";
echo "hi";

    $result=mysqli_query($conn,$checkuser);
    $row=mysqli_num_rows($result);
    if($row==1){
        echo '<script>
          window.location.href="signup.php";
          alert("Mobile Number or Email are alredy registered")</script>';
    }

    
   else{
    $sql= "INSERT INTO user_info VALUES ('$name','$age','$phone','$email','$password','$profession','$income','$state','$date')";

    mysqli_query($conn,$sql);
    
   echo "<script>alert('data success')</script>";
   header("location:login.php");
   }
}
?>
   