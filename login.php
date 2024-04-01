<?php

// Including the database file
require_once 'PHP/LIB/Database.php';

// Checking if the username has been set
if (isset($_POST['username'])) {

    // Setting up the database connection
    $db = new Database();

    // Preparing the query
    $query = "SELECT * FROM users WHERE name = :name";
    $params = [
        'name' => $_POST['username']
    ];

    // Preparing the query with the parameters
    $result = $db->query($query, $params);

    // Executing the query
    if (!$result->execute()) {
        echo 'Error: Query execution failed.';
        exit;
    }

    // Fetching the user
    $user = $result->fetch();

    // Checking if the user exists
    if ($user) {
        $hashedPassword = $user['password'];

        // Comparing the hashed passwords
        if (password_verify($_POST['password'], $hashedPassword)) {
            // Starting the session
            session_start();
            $_SESSION['user'] = $user->name;

            // Redirecting the user
            header('Location: user.php');
            exit;
        } else {
            echo "Invalid password";
        }
    } else {
        echo "Invalid username";
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
            <label for="username">username:</label><br>
            <input type="text" id="username" name="username"><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password"><br>
            <input type="button" value="Register" onclick="location.href='register.php';" />
            <input type="submit" value="Log In">
        </form>
        <?php if (isset($err)) {
            echo "<p>$err</p>";
        } ?>
        <?php if (isset($_SESSION)) {
            echo "<pre>";
            print_r($_SESSION);
            echo "</pre>";
        } ?>
        <footer class="footer">
            <p>&copy; 2023 PhobiaHelp</p>
        </footer>
    </div>
</body>

</html>