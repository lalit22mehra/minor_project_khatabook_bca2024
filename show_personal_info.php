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
    <link rel="stylesheet" href="show_personal_info.css">
    
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

<div class="pi">
    <table class="table_info">
        <tr>
            <th>NAME</th>
            <td><?php echo $row['NAME']; ?></td>
        </tr>

        <tr>
            <th>AGE</th>
            <td><?php echo $row['AGE']; ?></td>
        </tr>

        <tr>
            <th>PHONE</th>
            <td><?php echo $row['PHONE']; ?></td>
        </tr>

        <tr>
            <th>EMAIL</th>
            <td><?php echo $row['EMAIL']; ?></td>
        </tr>

        <tr>
            <th>PROFESSION</th>
            <td><?php echo $row['PROFESSION']; ?></td>
        </tr>

        <tr>
            <th>INCOME</th>
            <td><?php echo $row['INCOME']; ?></td>
        </tr>

        <tr>
            <th>STATE</th>
            <td><?php echo $row['STATE']; ?></td>
        </tr>

        <tr>
            <th>JOINED DATE</th>
            <td><?php echo $row['JOINED_DATE']; ?></td>
        </tr>


    </table>

    <button value="Update Profile" class="update_button"><a href="update_personalifo.php" class="update_link" >Update Profile</a></button>

    </div>

    <div id="bgimage">
        <img src="images/pi.jpg" alt="">

    </div>
</div>



<div class="footer headfoot">


</div>

                                                            
    
</body>
</html>