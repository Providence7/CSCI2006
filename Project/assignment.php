<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $first_name = trim($_POST["first_name"]);
    $last_name = trim($_POST["last_name"]);
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    $email = trim($_POST["email"]);
    $gender = trim($_POST["gender"]);
    $website = trim($_POST["website"]);
    $comment = trim($_POST["comment"]);

    // Initialize an error array
    $errors = [];

    // Backend validation
    if (empty($first_name)) {
        $errors[] = "First name is required.";
    }
    if (empty($last_name)) {
        $errors[] = "Last name is required.";
    }
    if (empty($username)) {
        $errors[] = "Username is required.";
    }
    if (empty($password)) {
        $errors[] = "Password is required.";
    } elseif (strlen($password) < 7) {
        $errors[] = "Password must be at least 7 characters long.";
    } elseif (!preg_match('/[A-Z]/', $password)) {
        $errors[] = "Password must contain at least one uppercase letter.";
    } elseif (!preg_match('/[0-9]/', $password)) {
        $errors[] = "Password must contain at least one digit.";
    } elseif (!preg_match('/[\W]/', $password)) {
        $errors[] = "Password must contain at least one special character.";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email .";
    }
    if (!empty($website) && !filter_var($website, FILTER_VALIDATE_URL)) {
        $errors[] = "Invalid website URL.";
    }
    if (empty($gender)) {
        $errors[] = "select a gender.";
    }

    // If there are errors, store in session and redirect back
    if (!empty($errors)) {
        $_SESSION["message"] = implode("<br>", $errors);
        $_SESSION["message_type"] = "error";
        header("Location: index.php");
        exit();
    }

    // If successful, store success message and redirect
    $_SESSION["message"] = "Signup successful! Welcome, " . htmlspecialchars($username) . ".";
    $_SESSION["message_type"] = "success";
    header("Location: index.php");
    exit();
}
?>
