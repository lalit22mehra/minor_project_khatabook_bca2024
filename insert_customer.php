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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Customers</title>
    <link rel="stylesheet" href="css_insert_customer.css">
    <link rel="stylesheet" href="user_dasboard.css">
    <script src="logout.js"></script>
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

    <div class="outboox">

        <form method="post" action="c_insert_customer.php">
            <table>
                <tr>
                    <th colspan="2" id="heading_add">Add Customer</th>
                </tr>
                <tr>
                    <th class="label_name">Customer name:</th>
                    <th><input type="text" class="ip" name="c_name" required></th>
                </tr>
                <tr>
                    <th class="label_name">Customer Phone:</th>
                    <th><input type="number" class="ip" name="c_phone" required></th>
                </tr>
                <tr>
                    <th class="label_name">Customer Email:</th>
                    <th><input type="email" class="ip" name="c_email" required></th>
                </tr>
                <tr>
                    <th class="label_name">Customer Address:</th>
                    <th><input type="text" class="ip" name="c_address" required></th>
                </tr>

                <tr>
                    <th class="label_name">Customer State:</th>
                    <th><input type="text" class="ip" name="c_state" required></th>
                </tr>
                <tr>
                    <th colspan="2"><input type="submit" value="ADD" class="btn" name="submit"></th>
                </tr>

            </table>
        </form>

    </div>
</body>

</html>