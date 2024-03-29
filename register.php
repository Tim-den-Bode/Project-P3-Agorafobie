<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agoraphobia User Registration</title>
    <link rel="stylesheet" type="text/css" href="css/Register.css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="JS/Register.js"></script>
</head>
<body>
    <div id="bg-container">
        <img src="img/ditism.jpg" alt=""/>
        <img src="img/schoolp123.jpg" alt=""/>
        <img src="img/martjiachte1.jpg" alt=""/>
    </div>
    <div class="register-container">
        <h1>Welcome to PhobiaHelp</h1>
        <p>Please sign up to create your account and access your personalized results.</p>
        <h2>Register</h2>
        <form action="PHP/Lib/register_handler.php" method="post">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name"><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email"><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password"><br>
            <label for="confirm_password">Confirm Password:</label><br>
            <input type="password" id="confirm_password" name="confirm_password"><br>
            <input type="submit" value="Sign Up" name="register_submit">
        </form>
        <footer class="footer">
            <p>&copy; 2023 PhobiaHelp</p>
        </footer>
    </div>
</body>
</html>