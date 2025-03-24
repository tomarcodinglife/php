<?php

// Multidimensional Array with data show in table
echo "Multidimensional Array with table" . "<br>";

$marks = array(
    array("Sujit", "21", "90"),
    array("Amit", "22", "80"),
    array("Sumit", "23", "70")
);

echo "<table border='1'>";
echo "<tr>";
echo "<th>Name</th>";
echo "<th>Age</th>";
echo "<th>Marks</th>";
echo "</tr>";

for($i = 0; $i < 3; $i++){
    echo "<tr>";
    for($j = 0; $j < 3; $j++){
        echo "<td>" . $marks[$i][$j] . "</td>";
    }
    echo "</tr>";
}

echo "</table>";

echo "<br>" . "<br>";



?>