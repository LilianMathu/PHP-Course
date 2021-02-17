<?php

// What is a variable
//It is a container that stores value.";

// Variable types
/*
1.string
2.integer
3.boolean (when it is printed, the browser converts true to a string with value 1, and false with value zero, an empy string)
4.float /double
5.null      (Is converted to an emptyy string)
6.array
7.object
8.resource
*/

// Declare variables
$name = "Lilian";
$age = 23;
$isMale = true;
$height = 1.60;
$salary = null;



// Print the variables. Explain what is concatenation
//concatenation is the joining of variables
echo $name . '<br>';
echo $age . '<br>';
echo $isMale . '<br>';
echo $salary . '<br><br><br>';



// Print types of the variables
#Use the gettype() variable
echo gettype($name) . '<br>';
echo gettype($age) . '<br>';
echo gettype($isMale) . '<br>';
echo gettype($height) . '<br>';
echo gettype($salary) . '<br><br><br>';



// Print the whole variable

/*for this purpose, the var_dump() function is used. It returns the 
    -location
    -type of the variable
    -length (for some variable types)
    -the variable itself
*/
echo var_dump($name, $age, $isMale, $height, $salary);



// Change the value of the variable
$name = false;
// Print type of the variable
echo var_dump($name);




// Variable checking functions prints one for true and nothing (zero) for false
    echo   is_string($name) . "<br>";  
    echo   is_integer($age) . "<br>";
    echo   is_bool($isMale) . "<br>";
    echo  is_float($height) . "<br>";


// Check if variable is defined or not. Evaluates to true or false
    echo isset($name). "<br>";



// Constants. Created with the define(name, value) functions which take two parameters, the constant name, and value
    define('PI', 3.14);

    echo PI. "<br>";
// Using PHP built-in constants
 echo SORT_ASC. "<br>";     //sort ascending
 echo PHP_INT_MAX. "<br>";  //prints max integer 