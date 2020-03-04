<?php

class Calculator{
    
    
    function add($num1, $num2){
        return $num1 + $num2;
    }
    
    function sub($num1, $num2){
        return $num1 - $num2;
    }
    
    function mult($num1, $num2){
        return $num1 * $num2;
    }
    
    function divi($num1, $num2){
        return round($num1 / $num2, 2);
    }
}

$calculator = new Calculator();

echo "example: num1 = 5, num2 = 7. Divide is rouded to 2 decimals.";
echo "<br>";
echo "Add: ". $calculator->add(5,7);
echo "<br>";
echo "Sub: ". $calculator->sub(5,7);
echo "<br>";
echo "Mult: ". $calculator->mult(5,7);
echo "<br>";
echo "Divi: ". $calculator->divi(5,7);
?>
