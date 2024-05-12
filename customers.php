<?php
include "connection.php";
session_start();
if (isset($_SESSION['phone'])) {
  $phone = $_SESSION['phone'];
  $pwd = $_SESSION['pwd'];

  $sql = "SELECT * FROM user_info WHERE PHONE=$phone";
  $result = mysqli_query($conn, $sql);

  $row = mysqli_fetch_assoc($result);
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>manage custoemrs</title>
  <link rel="stylesheet" href="user_dasboard.css">
    <link rel="stylesheet" href="css_customers.css">
    
    <script src="logout.js"></script>
    
  
</head>

<body>

<nav class="navbar">

<div class="above_navbar">
      <img src="images\lsmkhata2.png" alt="khatabook" class="khatalogo">

      <h1 class="username">
      <?php echo $row['NAME']; ?>  </h1>
<button onclick="logout()">LogOut</button>
     
      </div>

    <div class="icons">
<ul>
    <li><a href="user_dashboard.php" class="home">HOME</a></li>

    <li><a href="show_personal_info.php">PERSONAL INFORMATION</a></li>

    <li><a href="customers.php">CUSTOMERS</a><li></li>

    <li><a href="manage_transaction.php">MANAGE TRANSACTIONS</a></li>

    <li><a href="reports.php">REPORTS</a></li>

    <li><a href="feedback.php">FEEDBACK</a></li>
    </ul>
    </div>
     
  </nav>
  <div class="content headfoot">
<div class="options">
    <div class="add_customer">
      <a href="insert_customer.php">Add customers</a>
    </div>

    <div class="see_customer">
      <a href="see_customer.php">See all customers</a>
    </div>

    <div class="delete_customer">
      <a href="delete_customer.php">Delete customers</a>
    </div>
    </div>

    <div class="manage_customer_image">
    <img src="images\Customer-Management.jpg" alt="">
  </div>
  </div>

 

  <div class="footer headfoot">


  </div>

</body>

</html>



