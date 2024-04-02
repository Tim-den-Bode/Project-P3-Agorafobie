<?php

// Starting the user's session
session_start();

// Unsetting the user's session
session_destroy();

// Redirecting the user to the login page
header('Location: ../login.php');

// Terminating the script
exit;
