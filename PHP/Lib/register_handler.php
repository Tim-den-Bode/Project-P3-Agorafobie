<?php
// Importing the Database class
require_once 'Database.php';

// Creating a new instance of the Database class
$db = new Database();

// Checking if the registration form has been submitted
if (isset($_POST['register_submit'])) {

    // Sanitizing input
    $username = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
    $confirm_password = filter_var(trim($_POST['confirm_password']), FILTER_SANITIZE_STRING);

    // Validating input
    if (!$username || !$email || !$password || !$confirm_password) {
        // Displaying an error message if any required fields are empty
        echo 'Error: Please fill all required fields.';
        exit;
    }

    // Checking if the entered password and confirmation match
    if ($password !== $confirm_password) {
        echo 'Error: Password and Confirm Password do not match.';
        exit;
    }

    // Hashing the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Preparing the query to check if the email address already exists
    $query = "SELECT COUNT(*) FROM users WHERE email = :email";
    $params = [
        ':email' => $email
    ];

    // Executing the query
    $stmt = $db->query($query, $params);
    $count = $stmt->fetchColumn();

    // Checking if the email address already exists
    if ($count > 0) {
        // Displaying an error message if the email address already exists
        echo 'Error: Email address already exists.';
        exit;
    }

    // Preparing the query to insert the user data
    $query = "INSERT INTO users (name, email, password) VALUES (:username, :email, :password)";
    $params = [
        ':username' => $username,
        ':email' => $email,
        ':password' => $hashed_password
    ];

    // Executing the query
    $stmt = $db->query($query, $params);

    // Checking if the query was successful
    if ($stmt->execute()) {
        // Redirecting the user to the login page if the registration was successful
        header('location: ../../login.php');
        exit;
    } else {
        // Displaying an error message if the registration failed
        echo 'Error: Registration failed.';
        exit;
    }
}

?>