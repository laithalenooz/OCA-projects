<?php
// Initialize the admin session
session_start();
// Unset all of the admin session variables
 unset($_SESSION['adminLogin']);
// Redirect to admin login page
header("location:../login.php");
exit;
?>