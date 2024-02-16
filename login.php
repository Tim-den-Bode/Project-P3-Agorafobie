<?php
$host = 'localhost';
$db   = 'AgaroFobie';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $opt);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($username) && !empty($password)) {
        // prepare SQl queryals de user bestaat
        $stmt = $pdo->prepare('SELECT * FROM users WHERE username = :username LIMIT 1');
        $stmt->bindParam(':username', $username);
        $stmt->execute();


        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            // session variables
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['user'] = $user;

            header('Location: index.html');
            exit;
        } else {

            $error = 'Invalid username or password';
        }
    } else {

        $error = 'Please enter a username and password';
    }
}

?>


<div class="login-container">
    <h2>Login</h2>
    <?php if (isset($error)): ?>
        <p><?php echo htmlspecialchars($error); ?></p>
    <?php endif; ?>
</div>
