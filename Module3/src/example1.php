<?php
    declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example 1</title>
</head>
<body>
    <?php
    /*                      Example 1: PHP Variables
                            ========================
    Write a PHP program that displays the the texts: 
        `The Power of PHP` inside `h2` tag and,
        `PHP is a powerful programming language that empowers web applications to dynamically change their behavior.` 
        inside a paragraph tag.
        The text `web application` must be an anchor. Use PHP variables.  
    */
    $heading = 'The Power of PHP';
    $anchor = '<a href="#">web applications</a>';
    $par = 'PHP is a powerful programming language that empowers '.$anchor. ' to dynamically change their behavior.';
    
    ?><h2><?php echo $heading; ?></h2>
    <p><?php echo $par; ?></p>
    
</body>
</html>