<?php

// Function

/*

Function is a block of code that performs a specific task.
Function is a reusable code.
Function is a collection of code.

Syntax:
function function_name(){
    // code to be executed
}

two types of function:
1. Built-in function
2. User-defined function

Built-in function:
PHP has more than 1000 built-in functions.
These functions are predefined in PHP.
These functions are ready to use.

User-defined function:
User-defined function is created by the user.
User-defined function is created by the programmer.
User-defined function is created by the developer.

Advantages of function:
1. Reusability
2. Easy to maintain
3. Easy to read
4. Easy to debug
5. Easy to test
6. Easy to understand
7. Easy to manage


*/

// Example of function

function hello(){
    echo "Hello World! <br>";
}

// calling function
hello();


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


?>