<?php
 include "connection.php";
 session_start();
 if(isset($_SESSION['phone']))  {
    $phone=$_SESSION['phone'];
    $pwd=$_SESSION['pwd'];

    $sql="SELECT * FROM user_info WHERE PHONE=$phone";
    $result=mysqli_query($conn,$sql);

    $row=mysqli_fetch_assoc($result);
    


 } 
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deleted account</title>
 </head>
 <body>
    <div>
        <h1>Do you really want to delete your account?</h1>
    </div>

    <form action="account_deleted.php" method="POST">
    
        <label for="confirm">Are you sure you want to delete you account?</label><br>

        <input type="checkbox" id="confirm" name="confirm" required> <br> <br>

        <input type="submit" value="Delete Account">

        <h1>BACK home</h1>
        <a href="user_dashboard.php"></a>

    </form>
 </body>
 </html>

 