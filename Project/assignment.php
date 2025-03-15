<?php
session_start(); // Start session to store messages

// Check if form is submitted using POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $first_name = trim($_POST["first_name"]);
    $last_name = trim($_POST["last_name"]);
    $username = trim($_POST["username"]);
    $password = $_POST["password"]; 
    $email = trim($_POST["email"]);
    $gender = $_POST["gender"];
    $website = trim($_POST["website"]);
    $comment = trim($_POST["comment"]);

    // Validate fields
    if (empty($first_name) || empty($last_name) || empty($username) || empty($password) || empty($email) || empty($gender)) {
        $_SESSION["message"] = "All fields are require!";
        $_SESSION["message_type"] = "error";
        header("Location: index.php"); // Redirect back to form
        exit();
    }

    // Username validation
    if (strlen($username) < 5) {
        $_SESSION["message"] = "Username must be at least 5 characters long.";
        $_SESSION["message_type"] = "error";
        header("Location: index.php");
        exit();
    }

    // Password validation
    if (strlen($password) < 8) {
        $_SESSION["message"] = "Password must be at least 6 characters long.";
        $_SESSION["message_type"] = "error";
        header("Location: index.php");
        exit();
    }

    // Email validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION["message"] = "Invalid email format.";
        $_SESSION["message_type"] = "error";
        header("Location: index.php");
        exit();
    }


    // Encrypting password 
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);


    $_SESSION["message"] = "Signup successful!";
    $_SESSION["message_type"] = "success";

    header("Location: index.php");
    exit();
}
?>
