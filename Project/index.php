<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
    <link rel="stylesheet" href="assignment.css">
</head>
<body>

<div class="container">
    <h2>Signup Form</h2>

    <!-- Display Error or Success Message -->
    <?php if (isset($_SESSION["message"])): ?>
        <p class="<?php echo $_SESSION["message_type"]; ?>">
            <?php echo $_SESSION["message"]; ?>
        </p>
        <?php unset($_SESSION["message"]); // Clear message after displaying ?>
        <?php unset($_SESSION["message_type"]); ?>
    <?php endif; ?>

    <form action="assignment.php" method="POST" class="form-grid">
        <div>
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name">
        </div>

        <div>
            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name">
        </div>

        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
        </div>

        <div>
            <label for="gender">Gender:</label>
            <select id="gender" name="gender">
                <option value="">Select</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>

        <div>
            <label for="website">Website:</label>
            <input type="text" id="website" placeholder="https://" name="website">
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
