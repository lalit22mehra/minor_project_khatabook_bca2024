<?php   
 include "connection.php";
 session_start();
 if(isset($_POST['submit']))  {
   $phone=$_POST["phone"];
   $pwd=$_POST["pwd"];
  
   
 $sql="SELECT * FROM user_info WHERE PHONE='$phone' AND PASSWORD='$pwd'";
 
 $result= mysqli_query($conn , $sql);
            
 if(mysqli_num_rows($result) == 1){
  $row=mysqli_fetch_assoc($result);
 
  $_SESSION['name']=$row['NAME'];
  $_SESSION['phone']=$phone;
  $_SESSION['pwd']=$pwd;
    header("location:user_dashboard.php");


  }

 else{
  echo '<script>
   window.location.href="login.php";
   alert("invalid login")</script>';
   
 }

 }
?>