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

  <link rel="stylesheet" href="user_dasboard.css">
  <link rel="stylesheet" href="css_manage_transaction.css">
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




  <div class="headar headfoot">



  </div>

  <div class="content headfoot">


<div class="manage_transaction">

    <form action="add_transaction.php" method="POST">

      <label for="c_name" class="">Select Customer</label><br><br><br>

      <select name="c_name">
        <option value="">--select--</option>

        <?php
        while ($row = mysqli_fetch_assoc($cresult)) {

          echo "<option value='" . $row['C_NAME'] . "'>" . $row['C_NAME'] . "</option>";
        } ?>

      </select>

      <br><br>
      <button type="submit" name="submit">Add Transaction</button>
    </form>
    </div>

    <div class="transaction_image">
      <img src="images\business management.png" alt="">
    </div>

  </div>

  <div class="footer headfoot">


  </div>


</body>

</html>