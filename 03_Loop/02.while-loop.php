<?php

// While Loop
$i = 0;
while($i < 10){
    echo "The number is: $i <br>";
    $i++;
}

echo "<br>";

$i = 0;
while($i < 10){
    echo "The number is: $i <br>";
    if($i == 5){
        break;
    }
    $i++;
}

echo "<br>";

$i = 0;
while($i < 10){
    if($i == 5){
        $i++;
        continue;
    }
    echo "The number is: $i <br>";
    $i++;
}

echo "<br>";

// nested while loop
$i = 0;

while($i < 5){
    $j = 0;
    while($j < 5){
        echo "i = $i, j = $j <br>";
        $j++;
    }
    $i++;
}


?>