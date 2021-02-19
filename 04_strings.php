<?php

// Create simple string. Check out the difference between a single and double quotation
$name = "Lilian";
$name2 = 'Lilian';

echo "My name is $name. I love flowers."."(<br>)";
echo 'My name is ' .$name . '. I love flowers.'."(<br>)";        //you have ti concatenate when adding variables.


// String concatenation
echo 'My name is ' .$name . '. I love flowers.'."(<br>)";        //you have ti concatenate when adding variables.



// String functions
$string1 = "    Hello Lilian    ";

echo "1 - " . strlen($string1) ."(<br>)";    //prints the length of the string
echo "2 - " . trim($string1) . "(<br>)";    //Trims white spaces on both ends
echo "3 - " . ltrim($string1) . "(<br>)";   //Trims whitespace on the left side
echo "4 - " . rtrim($string1) . "(<br>)";   //trims white spaces on the right side
echo "5 - " . str_word_count($string1) . "(<br>)";  //returns the word count
echo "6 - " . strrev($string1) . "(<br>)";  //reverses the word order
echo "7 - " . strtoupper($string1) . "(<br>)";  //convert to uper case
echo "8 - " . strtolower($string1) . "(<br>)";  //convert to lower case
echo "9 - " . ucfirst('hello') . "(<br>)";  //Uper case first -> convert first letter to Upper case
echo "10 - " . lcfirst('HELLO') . "(<br>)"; //Lower case first -> converts the first letter to lower case
echo "11 - " . strpos($string, 1) . "(<br>";
// Multiline text and line breaks

// Multiline text and reserve html tags

// https://www.php.net/manual/en/ref.strings.php