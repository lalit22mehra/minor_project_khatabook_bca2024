

<?php

include "connection.php";
 session_start();
 if(isset($_SESSION['phone']))  {
    $phone=$_SESSION['phone'];
    $pwd=$_SESSION['pwd'];

    $sql="SELECT * FROM user_info WHERE PHONE=$phone";
    $result=mysqli_query($conn,$sql);

    $row=mysqli_fetch_assoc($result);

    $phone=$row['PHONE'];


 }

  if(isset($_POST['submit'])){
    $name = $_POST["name"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $profession = $_POST["profession"];
    $income = $_POST["income"];
    $state = $_POST["state"];


    $update="UPDATE user_info SET NAME=' $name',AGE='$age',EMAIL='$email',PASSWORD='$password',PROFESSION='$profession',INCOME='$income',STATE='$state' WHERE PHONE='$phone'";

    mysqli_query($conn,$update);


    echo "<script>alert('Updated sucessfully')</script>";
    header("location:show_personal_info.php");

  }


?>
