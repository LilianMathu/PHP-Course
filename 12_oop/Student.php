<?php

require_once "Person.php";

class Student extends Person {
    public $studentId;

    public function __construct($name, $age, $studentId)
    {
        $this->studentId = $studentId;
        parent::__construct($name, $age);
    }
}