<?php

$names = array("Sujit", "Amit", "Sumit", "Rohit", "Rajat", "Rahul", "Ravi", "Ramesh", "Rajesh", "Raj", "Rahul", "Rajat");

foreach($names as $name){
    echo "Name: $name <br>";
}

echo "<br>";

// with break and continue

foreach($names as $name){
    if($name == "Rohit"){
        break;
    }
    echo "Name: $name <br>";
}

echo "<br>";

foreach($names as $name){
    if($name == "Rohit"){
        continue;
    }
    echo "Name: $name <br>";
}

echo "<br>";


$personA = array(
    "name" => "Sujit Tomar",
    "age" => 21,
    "city" => "Bangalore",
    "state" => "Karnataka",
    "country" => "India"
);

foreach($personA as $key => $value){
    echo "$key: $value <br>";
}

echo "<br>";

// with break and continue

foreach($personA as $key => $value){
    if($key == "city"){
        break;
    }
    echo "$key: $value <br>";
}

echo "<br>";

foreach($personA as $key => $value){
    if($key == "city"){
        continue;
    }
    echo "$key: $value <br>";
}

echo "<br>";

// nested foreach loop

$person = array(
    "name" => "Sujit Tomar",
    "age" => 21,
    "city" => "Bangalore",
    "state" => "Karnataka",
    "country" => "India"
);

$person1 = array(
    "name" => "Amit Kumar",
    "age" => 22,
    "city" => "Delhi",
    "state" => "Delhi",
    "country" => "India"
);

$person2 = array(
    "name" => "Sumit Kumar",
    "age" => 23,
    "city" => "Mumbai",
    "state" => "Maharashtra",
    "country" => "India"
);

$persons = array($person, $person1, $person2);

foreach($persons as $person){
    foreach($person as $key => $value){
        echo "$key: $value <br>";
    }
    echo "<br>";
}


?>