<?php
session_start();

// Check if username and password are set and correct
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Your validation logic goes here
    // For example, you can hardcode a username and password for testing:
    if ($username === "julsxhdz" && $password === "julsxhdz1811.") {
        // Set session variables and redirect to a secure page
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;
        header("Location: secure_page.php");
        exit;
    } else {
        // Redirect to login page with invalid parameter
        header("Location: login.html?invalid=true");
        exit;
    }
}
?>
