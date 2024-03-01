<?php
//Without Class Properties
class Calculator {
    //add function to calculate sum of two numbers
    public function add($a, $b) {
        return $a + $b;
    }

    public function subtract($a, $b) {
        return $a - $b;
    }
}


$calculator = new Calculator();
$result_addition = $calculator->add(5, 3); 
$result_subtraction = $calculator->subtract(10, 4);
echo "Result of addition: $result_addition .'<br>'";
echo "Result of subtraction: $result_subtraction.'<br>'";

//With Class Properties
class Calculator {
    public $a;
    public $b;
    function __construct__($a, $b) {
        if ($a<0 || $b<0){
            throw new Exception('Parameters cannot be lesser then zero.');
        }
        $this->a = $a;
        $this->b = $b;
    
    }
    public function add() {
        return $this->a + $this->b;
    }

    public function subtract() {
        return $this->a -  $this->b;
    }
}
$calculator1 = new Calculator(1,2);
$result_addition1 = $calculator1->add(); 
$result_subtraction1 = $calculator1->subtract();
echo "Result of addition: $result_addition1 .'<br>'";
echo "Result of subtraction: $result_subtraction1.'<br>'";
echo "<h1>Here  Below the calculator Using proceral Programming</h1>";



function add($a, $b) {
    return $a + $b;
}

function subtract($a, $b) {
    return $a - $b;
}





function calculator($operation, $operand1, $operand2) {
    if ($operation == 'add') {
        return add($operand1, $operand2);
    } elseif ($operation == 'subtract') {
        return subtract($operand1, $operand2);
    } else {
        return "Invalid operation";
    }
}


$result_addition = calculator('add', 5, 3);
$result_subtraction = calculator('subtract', 10, 4);

echo "Result of addition: $result_addition <br>";
echo "Result of subtraction: $result_subtraction";

?>