<?php
// Start session if needed for handling login state (optional for front-end only)
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marvel Movie Login</title>
    <link rel="stylesheet" href="style.css"> <!-- External CSS -->
</head>
<body>

    <div class="login-container">
        <div class="logo-container">
            <img src="marvel-logo.png" alt="Marvel Logo">
        </div>
        <h2>Welcome to Marvel Movies</h2>
        
        <!-- Login form -->
        <form method="POST" action="login.php">
            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit">Login</button>
        </form>

        <!-- Sign up link -->
        <p>Don't have an account? <a href="register.php">Sign Up</a></p>
    </div>

</body>
</html>
