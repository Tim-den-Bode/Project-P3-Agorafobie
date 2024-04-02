<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agoraphobia User Page</title>
    <link rel="stylesheet" type="text/css" href="css/user.css">
</head>

<body>
    <div id="bg-container">
        <img src="img/ditism.jpg" alt="">
        <img src="img/schoolp123.jpg" alt="">
        <img src="img/martjiachte1.jpg" alt="">
    </div>
    <header class="header">
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="Symptomen.php">Information</a></li>
                <li><a href="login.php">user page</a></li>
            </ul>
        </nav>
    </header>
    <div class="user-wrapper">
        <div class="user-container">
            <h1>Welcome, <span class="username">
                    <?php echo htmlspecialchars($_SESSION['user']); ?>
                </span></h1>
            <p>Here are your test results:</p>
            <table class="test-results">
                <thead>
                    <tr>
                        <th>Test</th>
                        <th>Score</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>agoraphobie</td>
                        <td>80%</td>
                    </tr>
                </tbody>
            </table>
            <form action="PHP/lib/logout.php" method="post">
                <button type="submit" name="logout">Logout</button>
            </form>
        </div>
    </div>
    <footer class="footer">
        <p>&copy; 2023 PhobiaHelp</p>
    </footer>
    <script src="JS/bg-fade.js"></script>
</body>

</html>