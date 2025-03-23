<?php

// Basic function

function hello(){
    echo "Hello World! <br>";
}

// calling function 
hello();


// Function with parameter

function checkAge($age){
    if($age < 18){
        return "You are a minor. <br>";
    }else{
        return "You are a major. <br>";
    }
}   

$name = "Sujit Tomar";
$age = 21;

echo "Name: $name <br>";
echo "Age: $age <br>";

echo checkAge($age);

echo "End of the code. <br>";

// Function with multiple parameter

function display($name, $age){
    echo "Name: $name <br>";
    echo "Age: $age <br>";
    echo checkAge($age);
    echo "End of the code. <br>";
    echo "<hr>";
}

display("Sujit Tomar", 21);
echo "<br>";

display("Rahul Kumar", 17);
echo "<br>";

display("Rohit Singh", 25);
echo "<br>";

display("Rajesh Kumar", 15);
echo "<br>";

// Function with default parameter

function display1($name, $age = 18){
    echo "Name: $name <br>";
    echo "Age: $age <br>";
    echo checkAge($age);
    echo "End of the code. <br>";
    echo "<hr>";
}

display1("Sujit Tomar", 21);
echo "<br>";

display1("Rahul Kumar", 17);
echo "<br>";

display1("Rohit Singh", 25);
echo "<br>";

display1("Rajesh Kumar");
echo "<br>";

// Function with return type

function add($a, $b): int{
    return $a + $b;
}

echo add(10, 20);
echo "<br>";

echo add(30, 40);
echo "<br>";

echo add(50, 60);
echo "<br>";

echo add(70, 80);
echo "<br>";

// Function with multiple return type

function add1($a, $b): float{
    return $a + $b;
}

echo add1(10, 20);
echo "<br>";

echo add1(30, 40);
echo "<br>";

echo add1(50, 60);
echo "<br>";

echo add1(70, 80);
echo "<br>";

// Function under function

function outerFunction(){
    echo "Outer function <br>";

    function innerFunction(){
        echo "Inner function <br>";
    }

    innerFunction();
}

outerFunction();

// Function with global variable

$globalVar = 10;

function globalFunction(){
    global $globalVar;
    echo $globalVar;
}

globalFunction();

// Function with static variable

echo "Function with static variable <br>";

function staticFunction(){
    static $staticVar = 0;
    echo $staticVar;
    $staticVar++;
}

staticFunction()."<br>";
staticFunction()."<br>";
staticFunction()."<br>";
staticFunction()."<br>";
staticFunction()."<br>";
staticFunction()."<br>";
staticFunction()."<br>";
staticFunction()."<br>";
staticFunction()."<br>";
staticFunction()."<br>";

// Function with reference variable

echo "Function with reference variable <br>";

function referenceFunction(&$refVar){
    $refVar++;
    echo $refVar;
}  

$refVar = 10;
referenceFunction($refVar);
echo "<br>";
echo $refVar;

// Function with array

echo "Function with array <br>";

function arrayFunction($arr){
    foreach($arr as $value){
        echo $value . "<br>";
    }
}

$arr = array(10, 20, 30, 40, 50);
arrayFunction($arr);

// Function with array and return type

echo "Function with array and return type <br>";

function arrayFunction1($arr): array{
    return $arr;
}

$arr = array(10, 20, 30, 40, 50);
print_r(arrayFunction1($arr));





?>