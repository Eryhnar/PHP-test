<?php

    class Persona {
        protected $name;
        public $age;
        public $gender;

        public function __construct($name, $age, $gender) {
            $this->name = $name;
            $this->age = $age;
            $this->gender = $gender;
        }

        function getName() {
            return $this->name;
        }

        function setName($name) {
            $this->name = $name;
        }
    }

    class Student extends Persona {
        private $course;

        public function __construct($name, $age, $gender, $course) {
            parent::__construct($name, $age, $gender);
            $this->course = $course;
        }

        function getCourse() {
            return $this->course;
        }

        function setCourse($course) {
            $this->course = $course;
        }
    }

    $John = new Student("John", 23, "male", "Computer Science");

    echo "name: ".$John->getName()."<br>";
?>