<?php
    declare(strict_types=1);
    /*                      Exercise 3: Arithmetic operations
                            =================================
    Write a PHP program to perform the following operations. Three variables
    $num1 and $num2 are created for you. Assign values to the variables locally
    inside the functions, create variables to hold the operation results and perform
    the operation locally inside the functions. 
     Put all your static resources such as `.css` and `.js` files inside
    the `resources` directory. 
    */
    final class Module33 {
        // This function will perform the addition operation
        public function add($num1, $num2): float{
            // Write your code for this exercise here.
           
            return $sum;
        }
        public function subtract($num1, $num2): float{
            // Write your code for this exercise here.
           
            return $difference;
        }
        public function multiply($num1, $num2): float{
            // Write your code for this exercise here.
            
            return $product;
        }
        public function divide($num1, $num2): float{
            // Write your code for this exercise here.
            
            if ($num2 != 0){
                return $quotient;
            }
        }
    } 
    /* The following code will help you view your output in web browsers.
        DO NOT EDIT or REMOVE it.
    */
    $module33 = new Module33();
    $sum = $module33->add(9.0, 3.0);
    echo 'Sum is '.$sum[2].'<br>';
    
    $difference = $module33->subtract(9.0, 3.0);
    echo 'Difference is '.$difference[2].'<br>';

    $product = $module33->multiply(9.0, 3.0);
    echo 'Product is '.$product[2].'<br>';

    $quotient = $module33->divide(9.0, 3.0);
    echo 'Quotient is '.$quotient[2].'<br>';

