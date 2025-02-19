<?php 
declare(strict_types=1);

/*
                            Problem 1: Generate Random Password
                            ===================================
    Write a PHP program that ask the user to enter their first name, last name, and date of birth
    and generate a random password from these data. The password must have the following characters:
        1. The minimum length of the password is 6 characters.
        2. The password must contain at least 1 upper-case characters, 1 lower-case characters, and 1 digit.
        3. The password cannot start with a digit.
        4. The password must contain unique characters.
    
*/

final class Problem1 {
    public function get_user_info(): array {
        $firstName = readline("Enter your first name: ");
        $lastName = readline("Enter your last name: ");
        $dateOfBirth = readline("Enter your date of birth (YYYY-MM-DD): ");

        return $user_info =  [
            'firstname' => trim($firstName),
            'lastname' => trim($lastName),
            'dob' => trim($dateOfBirth)
        ];
    }
    public function generate_password($data): string {
        $raw_string = $data['firstname'] . $data['lastname'] . str_replace('-', '', $data['dob']);
        return $password =  substr(str_shuffle($raw_string), 0, 8);
    }
} 
/* The following code will help you view your output in web browsers.
    DO NOT EDIT or REMOVE it.
*/
$obj = new Problem1();
$info = $obj->get_user_info();
$pwd = $obj->generate_password($info);
print_r($pwd);
