<!DOCTYPE html>
<html lang="en">

<head>
    <title> login Form for khatabook</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    
    <form method="POST" action="login_check.php">
        <h3>Login Here</h3>

      <label for="username">Phone</label>  
        <input type="text" id="username" name="phone" >

       <label for="password">Password</label> 
        <input type="password" id="password" name="pwd" >


        <div class="sign">
                <h4>Don't have an account yet?</h4>
                <a href="signup.php">Sign up</a>
            </div>
        <button name='submit'>LOG IN</button>
       
    </form>
</body>

</html>    

