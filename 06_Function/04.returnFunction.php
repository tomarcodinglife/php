<?php 

// function with return value

function addition($numA, $numB){
    $sum = $numA + $numB;
    return $sum;
}

function subtraction($numA, $numB){
    $sub = $numA - $numB;
    return $sub;
}

function multiplication($numA, $numB){
    $mul = $numA * $numB;
    return $mul;
}

function division($numA, $numB){
    $div = $numA / $numB;
    return $div;
}


$num1 = 10;
$num2 = 5;

echo "Addition of $num1 and $num2 is: ".addition($num1, $num2)."<br>";
echo "Subtraction of $num1 and $num2 is: ".subtraction($num1, $num2)."<br>";
echo "Multiplication of $num1 and $num2 is: ".multiplication($num1, $num2)."<br>";
echo "Division of $num1 and $num2 is: ".division($num1, $num2)."<br>";




?>