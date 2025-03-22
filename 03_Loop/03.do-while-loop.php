<?php


// Do While Loop
$i = 0;
do{
    echo "The number is: $i <br>";
    $i++;
}while($i < 10);

echo "<br>";

$i = 0;
do{
    echo "The number is: $i <br>";
    if($i == 5){
        break;
    }
    $i++;
}while($i < 10);

echo "<br>";

$i = 0;
do{
    if($i == 5){
        $i++;
        continue;
    }
    echo "The number is: $i <br>";
    $i++;
}while($i < 10);

echo "<br>";    

$table = 5;

$i = 1;
do{
    echo "$table * $i = " . $table * $i . "<br>";
    $i++;
}while($i <= 10);

echo "<br>";

// Nested Do While Loop

echo "Nested Do While Loop <br>";

$i = 0;

do{
    $j = 0;
    do{
        echo "i = $i, j = $j <br>";
        $j++;
    }while($j < 5);
    $i++;
}while($i < 5);

?>