<?php
require_once 'Database.php';

// Database example using the provided Database class
$db = new Database();

// Handling form submission
if (isset($_POST['register_submit'])) {


    // Check if the password and confirmation match
    if ($_POST['password'] !== $_POST['confirm_password']) {
        echo 'Error: Password and Confirm Password do not match!';
    } else {
        if ($_POST['register_submit']) {
            header('location: ../../login.php');
            exit;
        } else {
            echo 'wachtwoord of username werkt niet';
        }
    }
}
?>