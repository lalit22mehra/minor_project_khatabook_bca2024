<?php
include "connection.php";
session_start();
if (isset($_SESSION['phone'])) {
      $phone = $_SESSION['phone'];
      $pwd = $_SESSION['pwd'];

      $sql = "SELECT * FROM user_info WHERE PHONE=$phone";
      $result = mysqli_query($conn, $sql);

      $row = mysqli_fetch_assoc($result);
      $name = $row['NAME'];
      $email = $row['EMAIL'];
      $phone = $row['PHONE'];



      if (isset($_POST['submit'])) {
            $feedback = $_POST['feedback'];
            $f_date = date("Y-m-d");

            $insert = "INSERT INTO feedback_info VALUES ('$name','$email','$feedback','$f_date','$phone')";
            mysqli_query($conn, $insert);


            echo '<script>
          window.location.href="feedback.php";
          alert("THANKS, WE GOT YOUR FEEDBACK!")</script>';


      }
}

?>