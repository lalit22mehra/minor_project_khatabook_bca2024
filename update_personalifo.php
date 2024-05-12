<?php
 include "connection.php";
 session_start();
 if(isset($_SESSION['phone']))  {
    $phone=$_SESSION['phone'];
    $pwd=$_SESSION['pwd'];

    $sql="SELECT * FROM user_info WHERE PHONE=$phone";
    $result=mysqli_query($conn,$sql);

    $row=mysqli_fetch_assoc($result);

    $phone=$row['PHONE'];


 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    
     <link rel="stylesheet" href="user_dasboard.css">

     <link rel="stylesheet" href="css_update_personalinfo.css">

     <script src="back_button.js"></script>
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
  <div class="back_personal_info">
<button onclick="back_personal();">Back</button>
     </div>

     <div class="img_update">
<img src="images\update_info.jpg" alt="">
     </div>
    <div class="container">
        <form class="signup-form" action="c_update_personalifp.php" method="POST">
            <h2>Sign Up</h2>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name"  value="<?php echo $row['NAME']; ?>">
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" id="age" name="age" placeholder="Enter your age"  value="<?php echo $row['AGE']; ?>" required  >
            </div>
           
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" value="<?php echo $row['EMAIL']; ?>" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" value="<?php echo $row['PASSWORD']; ?>" required>
            </div>
            <div class="form-group">
                <label for="profession">Profession</label>
                <input type="text" id="profession" name="profession" placeholder="Enter your profession" value="<?php echo $row['PROFESSION']; ?>" required>
            </div>
            <div class="form-group">
                <label for="income">Income (Yearly)</label>
                <input type="number" id="income" name="income" placeholder="Enter your total income" value="<?php echo $row['INCOME']; ?>" required>
            </div>
            <div class="form-group">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="Enter your state" value="<?php echo $row['STATE']; ?>" required class="state">
            </div>
            <button type="submit" name='submit'>Update Profile</button>
        </form>
    </div>
</body>
</html>

