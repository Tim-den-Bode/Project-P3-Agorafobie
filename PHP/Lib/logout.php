<?php

// Unset the user's session
session_start();
unset($_SESSION['user']);

// Redirect the user to the login page
header('Location: ../login.php');
exit;