<?php

// $file = "https://api.github.com/users/sujitsoftengg";


// array convert to JSON data
$user = ["name" => "sujit tomar", "age"=>"24", "email"=>"sujit@google.com"];
print_r($user); // Array ( [name] => sujit tomar [age] => 24 [email] => sujit@google.com )

$userJson = json_encode($user);
echo $userJson; //  {"name":"sujit tomar","age":"24","email":"sujit@google.com"}

echo "<br> </br>";

// JSON to array 
$data = '{"name":"sujit tomar","age":"24","email":"sujit@google.com"}';
$dataArray = json_decode($data, true);
print_r($dataArray); //A rray ( [name] => sujit tomar [age] => 24 [email] => sujit@google.com )



echo "<br> </br>";

// JSON to Object
$mydata = '{"name":"sujit tomar","age":"24","email":"sujit@google.com"}';
$dataobj = json_decode($mydata);
print_r($dataobj); // stdClass Object ( [name] => sujit tomar [age] => 24 [email] => sujit@google.com ) 



?>