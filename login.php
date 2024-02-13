<?php
// database coneccteeeruh
$host = 'localhost';
$db   = 'your_database_name';
$user = 'your_username';
$pass = 'your_password';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $opt);

// checken of de form is gesubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // de form data pakken
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Form data VALIDEREN
    if (!empty($username) && !empty($password)) {
        // prepare SQl queryals de user bestaat
        $stmt = $pdo->prepare('SELECT * FROM users WHERE username = :username LIMIT 1');
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        // User data chappen
        $user = $stmt->fetch();

        // Checken of de user bestaat en t wachtwoord correct is
        if ($user && password_verify($password, $user['password'])) {
            // session variables
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['user'] = $user;

            // Redirect homepage
            header('Location: home.php');
            exit;
        } else {
            // Error msg laten zien
            $error = 'Invalid username or password';
        }
    } else {
        // Andere error msg
        $error = 'Please enter a username and password';
    }
}

// de header file include
include 'header.php';
?>

<!-- de login form laten zien -->
<div class="login-container">
    <h2>Login</h2>
    <?php if (isset($error)): ?>
        <p><?php echo htmlspecialchars($error); ?></p>
    <?php endif; ?>
    <form action="login.php" method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br>
        <input type="submit" value="Login">
    </form>
</div>

<!-- FOoter includen duhhh -->
<?php include 'footer.php'; ?>