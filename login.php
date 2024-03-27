<?php

require_once 'PHP/Lib/Database.php';
$db = new Database();

if (isset ($_POST['username'])) {

    $db->query("SELECT * FROM users WHERE name=:username AND password=:password");
    $db->bind(':username', $_POST['username']);
    $db->bind(':password', $_POST['password']);

    // only first result instead of all. Use resultSet for all.
    $result = $db->single();

    if (isset ($result->name)) {
        session_start();
        $_SESSION['user'] = $result->name;
        header('refresh:0, url = index.html');
        exit;
    } else {
        $err = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agoraphobia User Login</title>
    <link rel="stylesheet" type="text/css" href="css/Inlog.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="JS/Inlog.js"></script>
</head>

<body>
    <div id="bg-container">
        <img src="img/ditism.jpg" alt="">
        <img src="img/schoolp123.jpg" alt="">
        <img src="img/martjiachte1.jpg" alt="">
    </div>
    <div class="login-container">
        <h1>Welcome to PhobiaHelp</h1>
        <p>Please log in to access your account and get the results of your test.</p>
        <h2>Login</h2>
        <form action="login.php" method="post">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username"><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password"><br>
            <input type="button" value="Register" onclick="location.href='register.php';" />
            <input type="submit" value='Log In' ;>
        </form>
        <footer class="footer">
            <p>&copy; 2023 PhobiaHelp</p>
        </footer>
    </div>
</body>

</html>