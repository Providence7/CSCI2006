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
           $num1 = 9.0;
           $num2 = 3.0;
           $sum = $num1 + $num2;
            return $sum;
        }
        public function subtract($num1, $num2): float{
            // Write your code for this exercise here.
            $num1 = 9.0;
            $num2 = 3.0;
            $difference = $num1 - $num2;
            return $difference;
        }
        public function multiply($num1, $num2): float{
            // Write your code for this exercise here.
            $num1 = 9.0;
            $num2 = 3.0;
            $product = $num1 * $num2;
            return $product;
        }
        public function divide($num1, $num2): float{
            // Write your code for this exercise here.
            $num1 = 9.0;
            $num2 =3.0 ;
            $quotient = $num1 / $num2;
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
    echo 'Sum is '.$sum.'<br>';
    
    $difference = $module33->subtract(9.0, 3.0);
    echo 'Difference is '.$difference.'<br>';

    $product = $module33->multiply(9.0, 3.0);
    echo 'Product is '.$product.'<br>';

    $quotient = $module33->divide(9.0, 3.0);
    echo 'Quotient is '.$quotient.'<br>';

