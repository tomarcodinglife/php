<?php

// Function with parameter
function checkAge($age){
    if($age < 18){
        return "You are a minor. <br>";
    }else{
        return "You are a major. <br>";
    }
}

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

display1("Rahul Kumar");
echo "<br>";

?>