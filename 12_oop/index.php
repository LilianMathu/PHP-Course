<?php

// What is class and object
    /*A class is a template(blueprint) for objects, and an object is an instance of class.
    A class is defined by using the class keyword, followed by the name of the class and a 
    pair of curly braces ({}). All its properties(variables) and methods(functions) go inside the braces.
   */



// Create Person class in Person.php

class People {
    public $name;
    public $age;
    private $salary;

   }

$p = new People();
   echo "<pre>";
   var_dump($p);
   echo "</pre>";



// Create instance of Person
$p1 = new People();

$p1->name = "Lilian";
$p1->age = "123";

echo "<pre>";
var_dump($p1);
echo "</pre>";

echo $p1->name ."<br>";
echo $p1->age . "<br>";




$p2 = new People();

$p2->name = "Lily";
$p2->age = "121";

echo $p2->name ."<br>";
echo $p2->age ."<br>";

// Using setter and getter



?>