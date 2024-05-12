<?php
include "connection.php";
session_start();
if (isset($_SESSION['phone'])) {
  $phone = $_SESSION['phone'];
  $pwd = $_SESSION['pwd'];
  /*$sql="SELECT * FROM user_info WHERE PHONE=$phone";
      $result=mysqli_query($conn,$sql);
  */


  $sql = "SELECT * FROM user_info WHERE PHONE=$phone";
  $result = mysqli_query($conn, $sql);

  $row = mysqli_fetch_assoc($result);
  //$row=mysqli_fetch_assoc($result);
  $cql = "SELECT * FROM customer_info WHERE 1 ";
  $cresult = mysqli_query($conn, $cql);


}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>user navbar</title>

  <script src="logout.js"></script>
  <link rel="stylesheet" href="user_dasboard.css">
  <link rel="stylesheet" href="reports.css">
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


    <div class="reports_customer">

      <form action="see_reports.php" method="POST">

        <label for="c_name">View Transaction History</label><br><br><br>

        <select name="c_name">
          <option value="">--select--</option>

          <?php
          while ($row = mysqli_fetch_assoc($cresult)) {
            echo "<option value='" . $row['C_NAME'] . "'>" . $row['C_NAME'] . "</option>";
            ?>
            <?php

          } ?>

        </select>
        <br><br>
        <button type="submit" name="submit">See</button>
      </form>
    </div>


    <div class="image_reports">
      <img src="images\report3.jpg" alt="">
    </div>

  </div>

  <div class="footer headfoot">


  </div>




</body>

</html>