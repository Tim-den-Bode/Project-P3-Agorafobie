<?php

// Starting the user's session
session_start();

// Destroy the user's session
session_destroy();

// Redirect the user to the login page
header('Location: /login.php');

// Terminate the script
exit;
