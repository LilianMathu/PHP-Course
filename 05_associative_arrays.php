<?php


// ============================================
// Associative arrays
/*
-Associative arrays are arrays that use named keys that you assign to them.
-Associative arrays are used to store key value pairs.
-Associative array will have their index as string so that you can establish a strong association between key and values.
-   
*/
// ============================================

// Create an associative array
$person = [
    'Name' => 'Lilian', 
    'Location' => 'Kisumu',
    'Age' => 30,
    'Interests' => ['design-thinking', 'Software development']
];

var_dump($person) . "<br><br>";     //First way of printing arrays

print_r($person);      //Second way of printing arrays

echo  "<br><br>";





// Get element by key. Here you use the bracket notation.
echo $person['Location'] . "<br>"; 




// Set element by key
$person['Company'] = 'Mobile Mechanics';

var_dump($person);


echo "<br><br><br><br>";


// Null coalescing assignment operator. Since PHP 7.4
    //Method 1
    if(!isset($person['Address'])){
        $person['Address'] = 'unknown';
    }

    var_dump($person) . "<br><br>";

    echo "<br><br><br><br>";


    //Method 2 (ternary ish ish operator in PHP)
    $person['Address'] = $person['Address'] ?? 'unknown';
    var_dump($person) . "<br><br>";




// Check if array has specific key

// Print the keys of the array

// Print the values of the array

// Sorting associative arrays by values, by keys


// Two dimensional arrays

