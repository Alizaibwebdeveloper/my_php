<?php

class Calculator {
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




echo "<h1>Here  Below the calculator Using procedural Programming</h1>";



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


