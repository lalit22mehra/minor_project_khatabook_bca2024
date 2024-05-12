<?php
include "connection.php";
session_start();
$phone = $_SESSION['phone'];
$pwd = $_SESSION['pwd'];
$name = $_SESSION['name'];

if (isset($_POST['submit'])) {
  $c_name = $_POST['c_name'];

}


$Tsql = "SELECT * FROM transaction_info WHERE C_NAME='$c_name'";
$Tresult = mysqli_query($conn, $Tsql);
$Trow = mysqli_fetch_assoc($Tresult);

$c_phone = $Trow['C_PHONE'];

/*$Csql="SELECT * FROM customer_info WHERE PHONE='$phone'";
$Cresult=mysqli_query($conn,$Csqql);
$Crow=mysqli_fetch_assoc($Cresult);
*/


$Tcsql = "SELECT * FROM transaction_info WHERE C_PHONE='$c_phone'";
$Tcresult = mysqli_query($conn, $Tcsql);

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>see reports</title>
  <link rel="stylesheet" href="user_dasboard.css">
  <link rel="stylesheet" href="css_see_reports.css">
  <script src="back_button.js"></script>
  <script src="logout.js"></script>

</head>

<body>

  <nav class="navbar">
    <div class="above_navbar">
      <img src="images\lsmkhata2.png" alt="khatabook" class="khatalogo">

      <h1 class="username">
        <?php echo $name; ?>
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
  <div class="back_personal_info">
    <button onclick="back_customer();">Back</button>
  </div>

<div class="customer_info">
<h1>Customer Name:</h1>
  <p id="c_name"><?php echo $c_name; ?></p> 

  <h1>Phone:</h1>
<p id="c_phhone"><?php echo $c_phone; ?> </p>
</div>

  <div class="content_transaction">

    <div class="transaction_table">
      <table>
        <caption>Transaction Info</caption>
        <tr>

          <th>Transaction Type:</th>
          <th>Amount:</th>
          <th>Transaction Date:</th>
          <th>Due Date:</th>
          <th>Description:</th>
        </tr>


        <?php


        while ($Tcrow = mysqli_fetch_array($Tcresult)) {
          echo '<tr>';

          echo '<td>' . $Tcrow['TRANSACTION_TYPE'] . '</td>';
          echo '<td>' . $Tcrow['AMOUNT'] . '</td>';
          echo '<td>' . $Tcrow['TRANSACTION_DATE'] . '</td>';
          echo '<td>' . $Tcrow['DUE_DATE'] . '</td>';
          echo '<td>' . $Tcrow['DESCRIPTION'] . '</td>';

          echo '</tr>';
        }
        ?>

      </table>

    </div>
  </div>
</body>

</html>