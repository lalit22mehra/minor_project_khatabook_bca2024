<?php
include "connection.php";
session_start();
if (isset($_SESSION['phone'])) {
   $phone = $_SESSION['phone'];
   $pwd = $_SESSION['pwd'];


   $sql = "SELECT * FROM user_info WHERE PHONE=$phone";
   $result = mysqli_query($conn, $sql);

   $row = mysqli_fetch_assoc($result);


   $cql = "SELECT * FROM customer_info WHERE PHONE=$phone ";
   $cresult = mysqli_query($conn, $cql);


}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>see all customers</title>
   <link rel="stylesheet" href="css_see_customers.css">
   <link rel="stylesheet" href="user_dasboard.css">
   <script src="back_button.js"></script>
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
   <div class="back_personal_info">
      <button onclick="back_customer();">Back</button>
   </div>


   <div class="customers_record">

      
    
      <table border="2">
      <caption>Customers Details</caption>
         <tr>
            <th>Customer Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Address</th>
            <th>State</th>

         </tr>

         <?php
         while ($row = mysqli_fetch_assoc($cresult)) {
            echo '<tr>';
            echo '<td>' . $row['C_NAME'] . '</td>';
            echo '<td>' . $row['C_PHONE'] . '</td>';
            echo '<td>' . $row['C_EMAIL'] . '</td>';
            echo '<td>' . $row['C_ADDRESS'] . '</td>';
            echo '<td>' . $row['C_STATE'] . '</td>';

         }

         ?>

         </tr>

      </table>
   </div>
</body>

</html>