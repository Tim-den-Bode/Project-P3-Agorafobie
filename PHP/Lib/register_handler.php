<?php
require_once 'Database.php';
$db = new Database();

if (isset($_POST['register_submit'])) {

    // Sanitize input
    $username = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
    $confirm_password = filter_var(trim($_POST['confirm_password']), FILTER_SANITIZE_STRING);

    // Validate input
    if (!$username || !$email || !$password || !$confirm_password) {
        echo 'Error: Please fill all required fields.';
        exit;
    }

    // Check if the password and confirmation match
    if ($password !== $confirm_password) {
        echo 'Error: Password and Confirm Password do not match.';
        exit;
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare the query to check if the email address already exists
    $query = "SELECT COUNT(*) FROM users WHERE email = :email";
    $params = [
        ':email' => $email
    ];

    // Execute the query
    $stmt = $db->query($query, $params);
    $count = $stmt->fetchColumn();

    // Check if the email address alreadyexists
    if ($count > 0) {
        // Email address already exists
        echo 'Error: Email address already exists.';
        exit;
    }

    // Prepare the query to insert the user data
    $query = "INSERT INTO users (name, email, password) VALUES (:username, :email, :password)";
    $params = [
        ':username' => $username,
        ':email' => $email,
        ':password' => $hashed_password
    ];

    // Execute the query
    $stmt = $db->query($query, $params);
    if (!$stmt->execute()) {
        // Query execution failed
        echo 'Error: Query execution failed.';
        exit;
    }

    // Check if the query was successful
    if ($db->rowCount() > 0) {
        // Registration successful
        header('location: ../../login.php');
        exit;
    } else {
        // Registration failed
        echo 'Error: Registration failed.';
        exit;
    }
}

?>