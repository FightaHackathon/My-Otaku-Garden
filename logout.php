<?php
session_start();

if (isset($_POST['logout'])) {
    // User is logged in, perform the logout actions
    // For example, destroy the session to log the user out
    session_destroy();
    
    // Redirect to the HTML file after logout
   echo"Logged out successfully!";
    exit();
}
?> 


