<?php

// Declaring numbers
$a = 5;
$b = 4;
$c = 0.3;
$d = 7;

// Arithmetic operations (BODMAS applies here)
echo $a + $b + $c. "<br>"; 
echo $c + $b * $a. "<br>";

echo $a + $b. "<br>";
echo $a - $b. "<br>";
echo $a * $b. "<br>";
echo $a / $b. "<br>";
echo $a % $b. "<br><br><br>";


// Assignment with math operators
$a += $b; echo $a. "<br>";             // $a = $a + $b;
$a -= $b; echo $a. "<br>";
$a *= $b; echo $a. "<br>";
$a /= $b; echo $a. "<br>";
$a %= $b; echo $a. "<br><br><br>";



// Increment operator (++)
echo $d++. "<br>";
echo ++$d. "<br><br><br>";



// Decrement operator
echo $d--. "<br>";
echo --$d. "<br>";



// Number checking functions
echo is_float(3.12). "<br>"; //true
echo is_integer(5). "<br>";  //true
echo is_numeric("24"). "<br>";   //true
echo is_numeric("4.t5"). "<br><br>"; //false





// Conversion
    //1. string to float
        $a = '1.23';
        $b = (float)$a;
        echo var_dump($b). "<br>";  //prints float type of value 1.23

    //2. float to integer
        $x = 3.4;
        $z = (int)$x; 
        echo var_dump($z). "<br><br>";      //prints integer of value 3



// Number functions
echo abs(-15.2). "<br>";  //prints the absolute number, positive => 15.2
echo pow(2,3). "<br>";      //finds the power, takes two parameters, base and power =>8
echo sqrt(16). "<br>";      //finds the square root =>4
echo max(1,2,3,4,5.5). "<br>";        //finds the biggest number =>5.5
echo min(0,1,2,3,4). "<br>";        //finds the smallest number =>0
echo round(2.4). "<br>";            //rounds off the number to nearest whole number =>2
echo round(2.6). "<br>";            //=>3
echo floor(5.6). "<br>";            //Rounds off to the lowest number =>5
echo ceil(5.6). "<br>";             //Rounds off to highest number =>6



// Formatting numbers
$num1 = 123456789.123456789;
echo number_format($num1, 4, '.', ',').  "<br><br>";




// https://www.php.net/manual/en/ref.math.php
    //This is a reference to all the number methods. 