<?php

$string = "Sujit Tomar"; // This will create a string variable.
$int = 21; // This will create an integer variable.
$float = 21.5; // This will create a float variable.
$bool = true; // This will create a boolean variable.
$null = null; // This will create a null variable.
$array = array("Sujit", "Amit", "Sumit"); // This will create an array variable.
$object = new stdClass(); // This will create an object variable.

echo "String: " . $string . "Type: " . gettype($string) . "<br>";
echo "Integer: " . $int . "Type: " . gettype($int) . "<br>";
echo "Float: " . $float . "Type: " . gettype($float) . "<br>";
echo "Boolean: " . $bool . "Type: " . gettype($bool) . "<br>";
echo "Null: " . $null . "Type: " . gettype($null) . "<br>";
echo "Array: " . $array[0] . "Type: " . var_dump($array) . "<br>"; 
echo var_dump($object) . "<br>"; 

?>