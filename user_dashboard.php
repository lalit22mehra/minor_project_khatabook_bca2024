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
  <title>user navbar</title>

  <link rel="stylesheet" href="user_dasboard.css">
  <link rel="stylesheet" href="bgimage.css">




  <script src="logout.js"></script>
</head>

<body>

  <nav class="navbar">

    <div class="above_navbar">
      <img src="images\lsmkhata2.png" alt="khatabook" class="khatalogo">

      <h1 class="username">
        <?php echo $row['NAME']; ?>
      </h1>
      <button onclick="logout()">LogOut</button>

    </div>

    <div class="icons">
      <ul>
        <li><a href="user_dashboard.php" class="home">HOME</a></li>

        <li><a href="show_personal_info.php">PERSONAL INFORMATION</a></li>

        <li><a href="customers.php">CUSTOMERS</a>
        <li></li>

        <li><a href="manage_transaction.php">MANAGE TRANSACTIONS</a></li>

        <li><a href="reports.php">REPORTS</a></li>

        <li><a href="feedback.php">FEEDBACK</a></li>
      </ul>
    </div>

  </nav>


  <div class="content headfoot">
    <div class="image">



      <img src="images\kbook.jpg" alt="">
    </div>


    <div class="hometext">
      <h1>Welcome to Khatabook - Your Digital Ledger for Small Businesses</h1>
      <p>
        One of the key features of Khatabook is its simplicity and user-friendly interface. Even those who are not
        tech-savvy can quickly learn how to use the website and start managing their finances. <br><br>
        The purpose of Khatabook is to simplify and streamline the process of managing financial transactions for small
        businesses in India.<br><br>
        Khatabook aims to empower small businesses, especially those in the informal sector, by providing them with a
        user-friendly and accessible tool to manage their finances effectively.<br><br>

        Overall, the purpose of Khatabook is to help small businesses improve their financial management processes,
        increase efficiency, and make informed decisions about their finances. By offering a simple and efficient way to
        manage transactions, Khatabook aims to support the growth and success of small businesses in India.

      </p>
    </div>
  </div>

  <div class="footer headfoot">
  </div>



</body>

</html>