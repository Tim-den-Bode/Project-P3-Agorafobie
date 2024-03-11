<?php
$servername = "agarofobie";
$username = "root";
$password = "";
$dbname = "AgaroFobie";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php
require_once 'login.php';

// Initialize variables
$username = "";
$password = "";
$err = "";

// If form is submitted
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate credentials
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        header('location: Home.html');
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
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="" method="post">
        <label>Username:</label><br>
        <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>"><br>
        <label>Password:</label><br>
        <input type="password" name="password" value="<?php echo htmlspecialchars($password); ?>"><br>
        <button type="submit" name="login">Login</button>
    </form>
    <?php if (!empty($err)): ?>
        <p><?php echo htmlspecialchars($err); ?></p>
    <?php endif; ?>
</body>
</html>