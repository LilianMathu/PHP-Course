<?php

// Create array
$fruits = ["banana", "pears", "orange"];


// Print the whole array
var_dump($fruits) . "(<br>)";     //Prints the index of the arrays, variable type, value, length.



// Get element by index
echo $fruits[0] . '<br>';  



// Set element by index
$fruits[3] = "grapes";
$fruits[0] = "mangoes";

echo "<pre>";
var_dump($fruits);
echo "</pre>";



// Check if array has element at index 2
isset($fruits[2]);  //true

echo "<br><br><br>";

// Append element
$fruits[] = "tomatoes";

echo "<pre>";
var_dump($fruits);
echo "</pre>";

echo "<br><br><br>";



// Print the length of the array
echo count($fruits) . "<br>";


// Add element at the end of the array
echo array_push($fruits, "watermelon")  . "<br><br>";  //array_push returns the new lenth of the array.

echo "<pre>";
var_dump($fruits);
echo "</pre>";



// Remove element from the end of the array 
echo array_pop($fruits) . "<br>";       //Returns the removed element

echo "<pre>";
var_dump($fruits);
echo "</pre>";




// Add element at the beginning of the array
echo array_unshift($fruits, "embe dodo")  . "<br><br>";        //returns the new length

echo "<pre>";
var_dump($fruits);
echo "</pre>";



// Remove element from the beginning of the array
echo array_shift($fruits) .  "<br><br>";        //returns the removed element

echo "<pre>";
var_dump($fruits);
echo "</pre>";


// Split the string into an array
$person = "Lilian, wangare, Mathu";

 echo "<pre>";
var_dump(explode("," , $person)) ;
 echo "</pre>";



// Combine array elements into string
echo implode("&", $fruits) . "<br>";




// Check if element exist in the array
echo "<pre>";
var_dump(in_array("grapes", $fruits)) . "<br>";
echo "</pre>";



// Search element index in the array
echo "<pre>";
var_dump(array_search("grapes", $fruits)) . "<br>"; //prints the index of the array element. If element doesn't exist, it returns false
echo "</pre>";


// Merge two arrays
    // method 1: using array_merge()
    $vegetables = ["cabbage", "cucumber", "onions"];

    echo "<pre>";
    var_dump(array_merge($fruits , $vegetables)) . "<br>";
    echo "</pre>";


//Method 2: spread operator
// echo "<pre>";
// var_dump([...$fruits], [...$vegetables]) . "<br>";
// echo "</pre>";



// Sorting of array (Reverse order also)
sort($vegetables);


echo "<pre>";
var_dump($vegetables) . "<br>";
echo "</pre>";


//Reverse sort
rsort($vegetables);
echo "<pre>";
var_dump($vegetables) . "<br>";
echo "</pre>";



// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array

// Get element by key

// Set element by key

// Null coalescing assignment operator. Since PHP 7.4

// Check if array has specific key

// Print the keys of the array

// Print the values of the array

// Sorting associative arrays by values, by keys


// Two dimensional arrays