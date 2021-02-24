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
   /*
   These are used to set and get value for private properties
   
   */

class Animals {
   public $kingdom;
   public $age;
   private $location;

   public function __construct($kingdom, $age)
   {
      $this->kingdom = $kingdom;
      $this->age = $age;
   }

   public function setLocation($location)
   {
      $this->location = $location;
   }

   public function getLocation()
   {
      return $this->location;
   }
}

$bufallo = new Animals("animalia", "32");
$bufallo->setLocation("Tsavo East");
   echo "<pre>";
   var_dump($bufallo);
   echo"</pre>"; 

   echo $bufallo->getLocation();



// PHP Constructor
   /*
   If you create a __construct() function, PHP will automatically call this function when you create an
    object from a class.
   We see in the example below, that using a constructor saves us from calling the set_name() method 
   which reduces the amount of code.

   */


   class Fruits {
      public $color;
      public $size;

      public function __construct($color, $size)
      {
         $this->color = $color;
         $this->size = $size;
      }

   }

   $apple = new Fruits("green", "20");
   $banana = new Fruits("yellow", "30");

   echo "<pre>";
   var_dump($banana);
   echo"</pre>"; 

   //static properties and methods
   class Vehicles {
      public $make;
      public $model;
      private $year;
      public static $counter = 0;

      public function __construct ($make, $model)
      {
         $this->make = $make;
         $this->model = $model;
         self::$counter++;
      }

      public function setYear($year)
      {
         $this->year = $year;
      }

      public function getYear()
      {
         return $this->year;
      }

      public static function getCounter()
      {
         return self::$counter;
      }

   }

   $toyota = new Vehicles("Toyota", "Vitz");
   $mazda = new Vehicles("Mazda", "Demio");

   $toyota->setYear(2010);
   $mazda->setYear(2015);
   
   echo Vehicles::$counter;


      echo "<pre>";
      echo var_dump($toyota);
      echo "</pre>";
?>