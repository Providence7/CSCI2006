<?php
    declare(strict_types=1);
    /*                            Module 2: Exercise 1
                            ====================
    In this exercise, you will use the PHP echo statement to display messages in the browser.
    Message to display: "Hello, welcome to the world of PHP!"
        1. Define a variable called 'message' that holds the above message.
        2. Echo the message to display it in the browser.  
    */
    final class Module22 {
        public function exercise2(){
            // Write your code for this exercise here.
            $message =  "Hello, welcome to the world of PHP!";

            echo "<h1>" . $message . "</h2>";
        }
    } 
    /* The following code will help you view your output in web browsers.
        DO NOT EDIT or REMOVE it.
    */
    $module22 = new Module22();
    $module22->exercise2();