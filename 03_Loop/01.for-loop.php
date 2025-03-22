<?php

for($i = 0; $i < 10; $i++){
    echo "The number is: $i <br>";
}

echo "<br>";

for($i = 0; $i < 10; $i++){
    echo "The number is: $i <br>";
    if($i == 5){
        break;
    }
}

echo "<br>";

for($i = 0; $i < 10; $i++){
    if($i == 5){
        
        continue;
        echo "The number is: $i <br>";
    }
    echo "The number is: $i <br>";
}


echo "<br>";

$table = 5;

for($i = 1; $i <= 10; $i++){
    echo "$table * $i = " . $table * $i . "<br>";
}

echo "<br>";

// Nested For Loop

echo "Nested For Loop <br>";

for($i = 0; $i < 5; $i++){
    for($j = 0; $j < 5; $j++){
        echo "i = $i, j = $j <br>";
    }
}



?>


