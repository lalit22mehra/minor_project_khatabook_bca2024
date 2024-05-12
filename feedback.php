<?php
include "connection.php";
session_start();
if (isset($_SESSION['phone'])) {
    $phone = $_SESSION['phone'];
    $pwd = $_SESSION['pwd'];

    $sql = "SELECT * FROM user_info WHERE PHONE=$phone";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);

    $fql = "SELECT * FROM feedback_info WHERE PHONE=$phone ORDER BY F_DATE DESC";
    $fresult = mysqli_query($conn, $fql);

}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>user navbar</title>

    <link rel="stylesheet" href="user_dasboard.css">
    <link rel="stylesheet" href="css_feedback.css">
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

        <div class="feedback">
            <form action="c_feedback.php" method="POST" class="form_feedback">


                <div>
                    <textarea name="feedback" id="" cols="50" rows="20" required
                        placeholder="We all need people who will give us feedback. That's how we improve"></textarea>
                </div>

                <div>

                    <button type="submit" name='submit' class="submit_feedback">Submit feedback</button>
                </div>

            </form>
        </div>
         <div class="">

         </div>
        <div class="show_feedback">
            <table border="4" >
                <caption>Previous Feedback</caption>
                <tr>
                    <th class="date">Date </th>
                    <th>Feedback </th>
                </tr>
                <?php
                while ($row = mysqli_fetch_assoc($fresult)) {

                    echo '<tr>';
                    echo '<td>' . $row['F_DATE'] . '</td>';
                    echo '<td>' . $row['FEEDBACK'] . '</td>';

                } ?>

                </tr>
            </table>
        </div>

    </div>

    <div class="footer headfoot">


    </div>




</body>

</html>