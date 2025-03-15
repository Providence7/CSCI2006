<?php
session_start();

$message = isset($_SESSION['message']) ? $_SESSION['message'] : "";
$message_type = isset($_SESSION['message_type']) ? $_SESSION['message_type'] : "";

session_unset();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Assignment</title>
    <link rel="stylesheet" href="assignment.css"> 
</head>
<body>
    <div class="container">
        <h2>Sign Up Form</h2>

        <!--form -->
        <form action="assignment.php" method="POST" class="form-grid">
            <div>
                <label for="first_name">First_Name:</label>
                <input type="text" id="first_name" name="first_name" required>
            </div>
        
            <div>
                <label for="last_name">Last_Name:</label>
                <input type="text" id="last_name" name="last_name" required>
            </div>
        
            <div>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
        
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
        
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
        
            <div>
                <label for="gender">Gender </label>
                <select id="gender" name="gender" required>
                    <option value="">Select</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
        
            <div>
                <label for="website">Website</label>
                <input type="text" id="website" name="website">
            </div>
        
            <div>
                <label for="comment">Comment:</label>
                <textarea id="comment" name="comment" class="full-width"></textarea>
            </div>
        
            <div class="button-container full-width">
                <button type="submit">Sign Up</button>
            </div>
        </form>
    </div>
</body>
</html>
