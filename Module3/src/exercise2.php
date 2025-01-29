<?php
    declare(strict_types=1);
?>
<!--
                           Exercise 2: Salary Data
                            =======================
    Suppose you want to display the following in your web browser.
            
            Name        Salary
            ------------------
            John        $150,000
            Alice       $175,000
            Nash        $230,000

    Use Your knowledge of HTML, CSS and PHP variables to display the 
    above information in your web browser. You must use variables to hold
    each value in the table. Display the names in 'green' and the salary in 'red'. 
    Hint: Use the echo statement to display the table.
    Use 'name' and 'salary' as the class name for the table cells.
    Assign your table to a variable called `$output`
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 3: Exercise 2</title>
    <link rel="stylesheet" type="text/css" href="resources/css/style.css"/>
    <style>
        .name {
            color: green;
        }
        .salary {
            color: red;
        }
        table {
          
            border-collapse: collapse;
            width: 50%;
            margin: 10px auto;
        }
         td {
            padding-top: 20px ;
            text-align: center;
        }
        th {
            padding-top: 30px;
            padding-bottom: 15px;
            border-bottom: 1px solid black;
        }
     
    </style>
</head>

<body>
    <?php
        final class Module32 {
            public function exercise2(){
                // Write your code for this exercise here.
                $name1 = "John";
                $salary1 = "$150,000";

                $name2 = "Alice";
                $salary2 = "$175,000";

                $name3 = "Nash";
                $salary3 = "$230,000";

                        $output = "
                    <table>
                        <tr>
                            <th>Name</th>
                            <th>Salary</th>
                        </tr>
                        <tr>
                            <td class='name'>$name1</td>
                            <td class='salary'>$salary1</td>
                        </tr>
                        <tr>
                            <td class='name'>$name2</td>
                            <td class='salary'>$salary2</td>
                        </tr>
                        <tr>
                            <td class='name'>$name3</td>
                            <td class='salary'>$salary3</td>
                        </tr>
                    </table>

                 ";

        
                echo $output;
            }
        }
        /* The following code will help you view your output in web browsers.
        DO NOT EDIT or REMOVE it.
    */
      $module = new Module32();
      $module->exercise2();
  ?>
</body>
</html>