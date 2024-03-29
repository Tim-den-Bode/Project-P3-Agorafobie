<?php

// Check if the user is logged in
session_start();

if (!isset($_SESSION['user'])) {
    // User is not logged in
    header('Location: login.php');
    exit;
}

// Get the user's name from the session
$user = $_SESSION['user'];

?>

<!DOCTYPE html>
<html>

<head>
    <title>User Page</title>
</head>

<body>

    <h1>Welcome,
        <?php echo $user; ?>!
    </h1>

    <p>Here are your test results:</p>

    <table>
        <tr>
            <th>Test</th>
            <th>Score</th>
        </tr>
        <tr>
            <td>Test 1</td>
            <td>80%</td>
        </tr>
        <tr>
            <td>Test 2</td>
            <td>90%</td>
        </tr>
        <tr>
            <td>Test 3</td>
            <td>70%</td>
        </tr>
    </table>

    <p><a href="PHP/LIB/logout.php">Log out</a></p>

</body>

</html>