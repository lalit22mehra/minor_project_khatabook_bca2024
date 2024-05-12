<?php

 include "connection.php";
 session_start();
 if(isset($_POST['submit'])){
    $c_name=$_POST['c_name'];
    $_SESSION['c_name']=$c_name;
 }
 $name=$_SESSION['name'];
    $phone = $_SESSION['phone'];
    $pwd = $_SESSION['pwd'];
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Debit and Credit Transaction Page</title>
    
    <script src="logout.js"></script>
    <script src="back_button.js"></script>
  <link rel="stylesheet" href="user_dasboard.css">
  <link rel="stylesheet" href="css_add_trasaction.css">
    
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
      <button onclick="back_manage_transaction();">Back</button>
   </div>




    <h3>Customer Name: <?php echo $c_name?></h3>

    <div class="container">
        <h1>Debit and Credit Transaction</h1>
        <form action="c_add_transaction.php" method="POST">
        <label for="transaction_type">Transaction Type</label>

           

            <select id="transaction_type" name="transaction_type">
                <option value="DEBIT" name="transaction_type" >DEBIT</option>
                <option value="CREDIT" name="transaction_type" >CREDIT</option>
            </select>


            <label for="amount">Amount</label>
            <input type="number" id="amount" name="amount" required >


            <label for="account_number">Due Date</label>
            <input type="date" id="account_number" name="due_date" required>

            <label for="account_number">Description</label>
            <textarea id="account_number" cols="30" rows="5" name="description" ></textarea>

            

            

            <input type="submit" value="Submit" name="submit">
        </form>
    </div>
</body>
</html>
