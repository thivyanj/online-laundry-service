<?php
// Start the session
session_start();

// Unset all of the session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Send a response indicating successful logout
echo "Logout successful";
?>
