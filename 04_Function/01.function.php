<?php

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


?>