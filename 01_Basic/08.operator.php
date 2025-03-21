<?php

// Arithmetic Operators

echo "Arithmetic Operators". "<br>";
echo "<br>" . "<br>";

$x = 10;
$y = 20;

echo "Addition: " . ($x + $y) . "<br>"; // Addition: 30
echo "Subtraction: " . ($x - $y) . "<br>";  // Subtraction: -10
echo "Multiplication: " . ($x * $y) . "<br>"; // Multiplication: 200
echo "Division: " . ($x / $y) . "<br>"; // Division: 0.5
echo "Modulus: " . ($x % $y) . "<br>"; // Modulus: 10
echo "Exponentiation: " . (2 ** 3) . "<br>";  // Exponentiation: 8

echo "<br>" . "<br>";

// Assignment Operators
echo "Assignment Operators". "<br>" . "<br>";

$x = 10;
$y = 20;

$x += $y; // $x = $x + $y;
echo "Addition: " . $x . "<br>"; // Addition: 30
$x -= $y; // $x = $x - $y;
echo "Subtraction: " . $x . "<br>"; // Subtraction: 10
$x *= $y; // $x = $x * $y;
echo "Multiplication: " . $x . "<br>"; // Multiplication: 200
$x /= $y; // $x = $x / $y;
echo "Division: " . $x . "<br>"; // Division: 10
$x %= $y; // $x = $x % $y;
echo "Modulus: " . $x . "<br>"; // Modulus: 10
$x **= $y; // $x = $x ** $y;
echo "Exponentiation: " . $x . "<br>"; // Exponentiation: 100000000000000000000

echo "<br>" . "<br>";

// Comparison Operators
echo "Comparison Operators" . "<br>";
    echo "<br>" . "<br>";

$x = 10;
$y = 20;

echo "Equal: " . ($x == $y) . "<br>"; // Equal:
echo "Identical: " . ($x === $y) . "<br>"; // Identical:
echo "Not Equal: " . ($x != $y) . "<br>"; // Not Equal: 1
echo "Not Identical: " . ($x !== $y) . "<br>"; // Not Identical: 1
echo "Greater than: " . ($x > $y) . "<br>"; // Greater than:
echo "Less than: " . ($x < $y) . "<br>"; // Less than:
echo "Greater than or equal to: " . ($x >= $y) . "<br>"; // Greater than or equal to:
echo "Less than or equal to: " . ($x <= $y) . "<br>"; // Less than or equal to:
echo "Spaceship: " . ($x <=> $y) . "<br>"; // Spaceship: -1

echo "<br>" . "<br>";

// Increment/Decrement Operators
echo "Increment/Decrement Operators" . "<br>";
echo "<br>" . "<br>";

$x = 10;
echo "Post-increment: " . $x++ . "<br>"; // Post-increment: 10
echo "Pre-increment: " . ++$x . "<br>"; // Pre-increment: 12
echo "Post-decrement: " . $x-- . "<br>"; // Post-decrement: 12
echo "Pre-decrement: " . --$x . "<br>"; // Pre-decrement: 10

echo "<br>" . "<br>";

// Logical Operators
echo "Logical Operators" . "<br>";
echo "<br>" . "<br>";

$x = 10;
$y = 20;

echo "And: " . ($x and $y) . "<br>"; // And: 1
echo "Or: " . ($x or $y) . "<br>"; // Or: 1
echo "Xor: " . ($x xor $y) . "<br>"; // Xor:
echo "&&: " . ($x && $y) . "<br>"; // &&
echo "||: " . ($x || $y) . "<br>"; // ||
echo "!: " . (!$x) . "<br>"; // !

echo "<br>" . "<br>";

// String Operators
echo "String Operators" . "<br>";
echo "<br>" . "<br>";

$fname = "Sujit";
$lname = "Tomar";

echo "Concatenation: " . $fname . " " . $lname . "<br>"; // Concatenation: Sujit Tomar
$fname .= $lname; // $fname = $fname . $lname;
echo "Concatenation assignment: " . $fname . "<br>"; // Concatenation assignment: SujitTomar
echo "<br>" . "<br>";

// Array Operators
echo "Array Operators" . "<br>";
echo "<br>" . "<br>";

$x = array("a" => "red", "b" => "green");
$y = array("c" => "blue", "d" => "yellow");

print_r($x + $y) . "<br>"; // Array ( [a] => red [b] => green [c] => blue [d] => yellow )
var_dump($x == $y). "<br>"; // bool(false)
var_dump($x === $y). "<br>"; // bool(false)
var_dump($x != $y). "<br>"; // bool(true)
var_dump($x <> $y). "<br>"; // bool(true)
var_dump($x !== $y). "<br>"; // bool(true)

// Conditional Assignment Operators
echo "Conditional Assignment Operators" . "<br>";
echo "<br>" . "<br>";

$x = 10;
$y = 20;

echo $x ?: $y; // 10
echo $x ?? $y; // 10

echo "<br>" . "<br>";

// Null Coalescing Assignment Operator
echo "Null Coalescing Assignment Operator" . "<br>";
echo "<br>" . "<br>";

$x = null;
$y = 20;

$x ??= $y;
echo $x; // 20

echo "<br>" . "<br>";

// Spaceship Operator
echo "Spaceship Operator" . "<br>";
echo "<br>" . "<br>";

$x = 10;
$y = 20;

echo $x <=> $y; // -1
echo $y <=> $x; // 1
echo $x <=> $x; // 0

echo "<br>" . "<br>";

// Precedence Operators
echo "Precedence Operators" . "<br>";
echo "<br>" . "<br>";

$x = 10;
$y = 20;
$z = 30;

echo $x + $y * $z; // 610
echo $x + $y / $z; // 10.666666666667
echo $x + $y % $z; // 10
echo $x + $y ** $z; // 102

echo ($x + $y) * $z; // 900
echo ($x + $y) / $z; // 1.0
echo ($x + $y) % $z; // 0
echo ($x + $y) ** $z; // 3486784401

echo $x + ($y * $z); // 610
echo $x + ($y / $z); // 10.666666666667
echo $x + ($y % $z); // 10
echo $x + ($y ** $z); // 102

echo ($x + $y) * $z; // 900
echo ($x + $y) / $z; // 1.0
echo ($x + $y) % $z; // 0
echo ($x + $y) ** $z; // 3486784401

echo $x + $y * $z; // 610
echo $x + $y / $z; // 10.666666666667
echo $x + $y % $z; // 10
echo $x + $y ** $z; // 102  
echo ($x + $y) * $z; // 900
echo ($x + $y) / $z; // 1.0
echo ($x + $y) % $z; // 0
echo ($x + $y) ** $z; // 3486784401
echo $x + ($y * $z); // 610
echo $x + ($y / $z); // 10.666666666667
echo $x + ($y % $z); // 10
echo $x + ($y ** $z); // 102
echo ($x + $y) * $z; // 900
echo ($x + $y) / $z; // 1.0
echo ($x + $y) % $z; // 0
echo ($x + $y) ** $z; // 3486784401

echo "<br>" . "<br>";

// Ternary Operator
echo "Ternary Operator" . "<br>";
echo "<br>" . "<br>";

$x = 10;
$y = 20;

echo ($x > $y) ? $x : $y; // 20
echo ($x < $y) ? $x : $y; // 10

echo "<br>" . "<br>";

// Null Coalescing Operator
echo "Null Coalescing Operator" . "<br>";
echo "<br>" . "<br>";

$x = null;
$y = 20;

echo $x ?? $y; // 20

echo "<br>" . "<br>";

// Type Operators
echo "Type Operators" . "<br>";
echo "<br>" . "<br>";

class MyClass
{
    public $var = "Hello World";
}

$obj = new MyClass;

echo $obj instanceof MyClass; // 1

echo "<br>" . "<br>";

// Error Control Operators
echo "Error Control Operators" . "<br>";
echo "<br>" . "<br>";

echo @$test; // No Error

echo $test; // Error

echo "<br>" . "<br>";

// Execution Operators
echo "Execution Operators" . "<br>";
echo "<br>" . "<br>";

echo `ls`;

echo "<br>" . "<br>";

// String Operators
echo "String Operators" . "<br>";
echo "<br>" . "<br>";

$x = "Hello";
$y = "World";

echo $x . $y; // HelloWorld
echo $x .= $y; // HelloWorld

?>