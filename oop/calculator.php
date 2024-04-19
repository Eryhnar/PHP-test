<?php
    declare(strict_types=1);
    class Calculator {

        public function add(float $num1, float $num2): float{
            return $num1 + $num2;
        }
        public function subtract(float $num1, float $num2): float {
            return $num1 - $num2;
        }
        public function multiply(float $num1, float $num2): float {
            return $num1 * $num2;
        }
        public function divide(float $num1, float $num2): float {
            return $num1 / $num2;
        }

    }

    class ParamCalculator {

        public $num1;
        public $num2;

        public function __construct($num1, $num2) {
            $this->num1 = $num1;
            $this->num2 = $num2;
        }

        public function add() {
            return $this->num1 + $this->num2;
        }
        public function subtract() {
            return $this->num1 - $this->num2;
        }
        public function multiply() {
            return $this->num1 * $this->num2;
        }
        public function divide() {
            return $this->num1 / $this->num2;
        }
    }

    $calc = new ParamCalculator(3, 4);
    echo "add: ".$calc->add()."<br>";
    echo "divide: ".$calc->divide()."<br>";

    $calc = new Calculator();
    echo "add: ".$calc->add(3, 4)."<br>";
    echo "divide: ".$calc->divide(4, 3)."<br>";

?>
