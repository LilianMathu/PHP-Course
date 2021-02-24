<?php
    class Person {
        public $name;
        public $age;
        protected $salary;
        public static $counter = 0;

        public function __construct($name, $age)
        {
            $this->name = $name;
            $this->age = $age;
            $this->salary = 100;
            self::$counter++;
        }

        public function setSalary($salary)
        {
            $this->salary = $salary;
        }

        public function getSalary()
        {
            return $this->salary;
        }

        public static function getCounter()
        {
            return self::$counter;
        } 

    }

    $architect = new Person("Timothy", "26");
        $architect->setSalary(100000);

    echo "<pre>";
    var_dump($architect);
    echo "</pre>";


?>