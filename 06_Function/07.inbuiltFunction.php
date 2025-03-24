<?php

// String function
echo "String function <br>";
echo "<br>";

$string = "Hello World";

echo strlen($string)."<br>"; // for length of string
echo var_dump($string)."<br>"; // for type of string
echo str_word_count($string)."<br>"; // for word count
echo strrev($string)."<br>"; // for reverse string
echo strpos($string, "World")."<br>"; // for position of word
echo str_replace("World", "PHP", $string)."<br>"; // for replace word

echo "<br>";

// Number function
echo "Number Function <br>";
echo "<br>";
$number = 10.5;

echo var_dump(is_int($number))."<br>"; // for integer
echo var_dump(is_float($number))."<br>"; // for float
echo var_dump(is_numeric($number))."<br>"; // for numeric

echo "<br>";

// Array function
echo "Array function";

echo "<br>";

$fruits = array("Apple", "Banana", "Mango", "Orange");

echo count($fruits)."<br>"; // for count of array
echo var_dump(is_array($fruits))."<br>"; // for array
echo var_dump(in_array("Apple", $fruits))."<br>"; // for in array
echo array_search("Mango", $fruits)."<br>"; // for search in array

echo "<br>";

// Date function
echo "Date function";

echo "<br>";

date_default_timezone_set("Asia/Kolkata");

echo date("d/m/Y")."<br>"; // for date
echo date("d-m-Y")."<br>"; // for date
echo date("d.m.Y")."<br>"; // for date
echo date("l")."<br>"; // for day
echo date("h:i:sa")."<br>"; // for time

echo "<br>";

// Math function
echo "math function";

echo "<br>";

$number1 = 10;
$number2 = 20;

echo min($number1, $number2)."<br>"; // for minimum
echo max($number1, $number2)."<br>"; // for maximum
echo abs(-100)."<br>"; // for absolute
echo sqrt(100)."<br>"; // for square root
echo round(10.5)."<br>"; // for round
echo ceil(10.1)."<br>"; // for ceil
echo floor(10.9)."<br>"; // for floor

echo "<br>";

// Random function
echo "random function";

echo rand()."<br>"; // for random number
echo rand(10, 100)."<br>"; // for random number
echo rand(1000, 9999);

echo "<br>";


$val = "Sujit";
echo is_string($val); // 1 and display
echo is_int($val); // no display

echo "<br>";

$content = "Hello i am sujit tomar working as software developer";
echo substr($content, 0, 10)."<br>"; // for substring of string return 10 character from 0 index of string 
echo substr($content, 11, 5)."<br>"; // for substring of string return 5 character from 11 index of string
echo substr($content, 17, 5)."<br>"; // for substring of string return 4 character from 17 index of string
echo substr($content, 22, 5)."<br>"; // for substring of string return 5 character from 22 index of string
echo substr($content, 28, 7)."<br>"; // for substring of string return 7 character from 28 index of string



?>