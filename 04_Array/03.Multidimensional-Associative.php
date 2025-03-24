<?php


// Multidimensional Associative Array with data show in table
echo "Multidimensional Associative Array with table" . "<br>";

$marks = array(
    array("name" => "Sujit", "age" => "21", "marks" => "90"),
    array("name" => "Amit", "age" => "22", "marks" => "80"),
    array("name" => "Sumit", "age" => "23", "marks" => "70")
);

echo "<table border='1'>";
echo "<tr>";
echo "<th>Name</th>";
echo "<th>Age</th>";
echo "<th>Marks</th>";
echo "</tr>";

for($i = 0; count($marks) < 3; $i++){
    echo "<tr>";
    echo "<td>" . $marks[$i]["name"] . "</td>";
    echo "<td>" . $marks[$i]["age"] . "</td>";
    echo "<td>" . $marks[$i]["marks"] . "</td>";
    echo "</tr>";
}

echo "</table>";

echo "<br>" . "<br>";



?>