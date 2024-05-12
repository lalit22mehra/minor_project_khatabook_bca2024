
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up form for khatabook</title>
    <link rel="stylesheet" href="signup.css">
    <script src="signup.js"></script>
</head>
<body>
    
    <div class="container">
        <form class="signup-form" action="signupcheck.php" method="POST">
            <h2>Sign Up</h2>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" id="age" name="age"  required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="tel" id="phone" name="phone"  required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email"  required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="profession">Profession</label>
                <input type="text" id="profession" name="profession"  required>
            </div>
            <div class="form-group">
                <label for="income">Annual Income(in INR)</label>
                <input type="number" id="income" name="income" required>
            </div>
            <div class="form-group">
                <label for="state">State</label>
                <input type="text" id="state" name="state"  required class="state">
            </div>
            <div class="log">
                <h4>Already have an account?</h4>
                <a href="login.php">Log in</a>
            </div>
            <button type="submit" name='submit' onclick="signup_submit()">Sign Up</button>

          
            
        </form>
    </div>
</body>
</html>
