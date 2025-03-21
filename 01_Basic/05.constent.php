<?php

const name = "Sujit Tomar"; // This will create a constant variable.
$age = 21; // This will create a variable.
const __address = "Bangalore";  // This will create a constant variable.
define("email", "sujit@google.com");  // This will also create a constant variable.

const name = "Sujit Singh Rajput"; // This will throw an error because we can't change the value of constant.
age = 20; // This will throw an error because we can't create a variable without $ sign.
$age = 20; // This will change the value of variable. because variable can be changed.
email = "abc@gmail.com";  // This will throw an error because we can't change the value of constant.

echo "Name: " . name . "<br>";
echo "Age: " . $age . "<br>";
echo "Address: " . __address . "<br>";
echo "Email: " . email . "<br>";

?>


