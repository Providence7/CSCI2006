<?php
    declare(strict_types=1);
    /*                      Exercise 3
    : Palindrome Check
                            ============================
       Write a function to check whether a string is a palindrome or not.
       DO NOT USE BUILTIN FUNCTIONS to remove whitespaces or reverse the string!!
       You must name your function correctly following the PHP naming conventions.
       pass the string that you wish to check as parameter to the function.
       Note: You may need to define helper functions for this exercise. 
    */
    final class Module43 {
        public function is_palindrome($word): bool{
            // Write your code for this exercise here.
            $lowercased_word = '';
            for ($i = 0; $i < strlen($word); $i++) {
                $char = $word[$i];
                // Convert uppercase to lowercase (ASCII check)
                if ($char >= 'A' && $char <= 'Z') {
                    $lowercased_word .= chr(ord($char) + 32);
                } else {
                    $lowercased_word .= $char;
                }
            }
    
            // Remove spaces manually
            $processed_word = '';
            for ($i = 0; $i < strlen($lowercased_word); $i++) {
                if ($lowercased_word[$i] !== ' ') {
                    $processed_word .= $lowercased_word[$i];
                }
            }
    
            // Check if it's a palindrome manually
            $length = strlen($processed_word);
            for ($i = 0; $i < $length / 2; $i++) {
                if ($processed_word[$i] !== $processed_word[$length - 1 - $i]) {
                    return false;
                }
            }
    
            return true;
    
        }
    } 
    /* The following code will help you view your output in web browsers.
        DO NOT EDIT or REMOVE it.
    */
    $module43 = new Module43();

    $word = 'chrome';
    $result =  $module43->is_palindrome($word);
    $result ? print $word.' is a palindrome.': print $word.' is not a a palindrome.'.'<br>';

    $word = 'Madam';
    $result =  $module43->is_palindrome($word);
    $result ? print $word.' is a palindrome.': print $word.' is not a a palindrome.'.'<br>';

    $word = 'Borrow Or Rob';
    $result =  $module43->is_palindrome($word);
    $result ? print $word.' is a palindrome.': print $word.' is not a a palindrome.'.'<br>';
 
    $word = 'Red rum sir is murder';
    $result =  $module43->is_palindrome($word);
    $result ? print $word.' is a palindrome.': print $word.' is not a a palindrome.'.'<br>';