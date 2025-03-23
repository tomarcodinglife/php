<?php

// Array
echo "Array" . "<br>";
echo "<br>" . "<br>";


// Indexed Array
echo "Indexed Array" . "<br>";
echo "<br>" . "<br>";

$names = array("Sujit", "Amit", "Sumit");
echo $names[0] . "<br>"; // Sujit
echo $names[1] . "<br>"; // Amit
echo $names[2] . "<br>"; // Sumit

echo "<br>" . "<br>";

// Associative Array 
echo "Associative Array" . "<br>";
echo "<br>" . "<br>";

$age = array("Sujit" => "21", "Amit" => "22", "Sumit" => "23");
echo $age["Sujit"] . "<br>"; // 21
echo $age["Amit"] . "<br>"; // 22
echo $age["Sumit"] . "<br>"; // 23

echo "<br>" . "<br>";

// Multidimensional Array
echo "Multidimensional Array" . "<br>";
echo "<br>" . "<br>";

$marks = array(
    array("Sujit", "21", "90"),
    array("Amit", "22", "80"),
    array("Sumit", "23", "70")
);

echo $marks[0][0] . " " . $marks[0][1] . " " . $marks[0][2] . "<br>"; // Sujit 21 90
echo $marks[1][0] . " " . $marks[1][1] . " " . $marks[1][2] . "<br>"; // Amit 22 80
echo $marks[2][0] . " " . $marks[2][1] . " " . $marks[2][2] . "<br>"; // Sumit 23 70

echo "<br>" . "<br>";

?>

<?php

// Array Functions
echo "Array Functions" . "<br>";
echo "<br>" . "<br>";

$names = array("Sujit", "Amit", "Sumit");
$age = array("21", "22", "23");

echo count($names) . "<br>"; // 3
echo array_push($names, "Amit") . "<br>"; // 4
echo array_pop($names) . "<br>"; // Amit
echo array_shift($names) . "<br>"; // Sujit
echo array_unshift($names, "Sujit") . "<br>"; // 3
echo array_merge($names, $age) . "<br>"; // Array
echo array_sum($age) . "<br>"; // 66
echo array_product($age) . "<br>"; // 13608
echo array_reverse($names) . "<br>"; // Array
echo array_unique($names) . "<br>"; // Array

echo "<br>" . "<br>";

?>

<?php
// Sorting Array
echo "Sorting Array" . "<br>";
echo "<br>" . "<br>";

$names = array("Sujit", "Amit", "Sumit");
$age = array("21", "22", "23");

sort($names);
print_r($names); // Array ( [0] => Amit [1] => Sumit [2] => Sujit )

echo "<br>" . "<br>";

rsort($names);
print_r($names); // Array ( [0] => Sujit [1] => Sumit [2] => Amit )

echo "<br>" . "<br>";

asort($age);
print_r($age); // Array ( [0] => 21 [1] => 22 [2] => 23 )

echo "<br>" . "<br>";

ksort($age);
print_r($age); // Array ( [0] => 21 [1] => 22 [2] => 23 )

echo "<br>" . "<br>";

arsort($age);
print_r($age); // Array ( [2] => 23 [1] => 22 [0] => 21 )

echo "<br>" . "<br>";

krsort($age);
print_r($age); // Array ( [2] => 23 [1] => 22 [0] => 21 )

echo "<br>" . "<br>";

?>

<?php

// Array Chunk
echo "Array Chunk" . "<br>";
echo "<br>" . "<br>";

$names = array("Sujit", "Amit", "Sumit", "Rahul", "Rohit", "Rajesh");
print_r(array_chunk($names, 2)); // Array ( [0] => Array ( [0] => Sujit [1] => Amit ) [1] => Array ( [0] => Sumit [1] => Rahul ) [2] => Array ( [0] => Rohit [1] => Rajesh ) )

echo "<br>" . "<br>";

?>

<?php

// Array Combine
echo "Array Combine" . "<br>";

$names = array("Sujit", "Amit", "Sumit");
$age = array("21", "22", "23");

print_r(array_combine($names, $age)); // Array ( [Sujit] => 21 [Amit] => 22 [Sumit] => 23 )

echo "<br>" . "<br>";

?>

<?php

// Array Difference
echo "Array Difference" . "<br>";

$names = array("Sujit", "Amit", "Sumit");
$age = array("21", "22", "23");

print_r(array_diff($names, $age)); // Array ( [0] => Sujit [1] => Amit [2] => Sumit )

echo "<br>" . "<br>";

// Array Intersect
echo "Array Intersect" . "<br>";

$names = array("Sujit", "Amit", "Sumit");
$age = array("21", "22", "23");

print_r(array_intersect($names, $age)); // Array ( )

echo "<br>" . "<br>";

?>

<?php

// Array Search
echo "Array Search" . "<br>";

$names = array("Sujit", "Amit", "Sumit");

echo array_search("Amit", $names); // 1

echo "<br>" . "<br>";

?>

<?php

// Array Replace
echo "Array Replace" . "<br>";

$names = array("Sujit", "Amit", "Sumit");

print_r(array_replace($names, array("Rahul", "Rohit", "Rajesh"))); // Array ( [0] => Rahul [1] => Rohit [2] => Rajesh )

echo "<br>" . "<br>";

?>

<?php

// Array Reverse
echo "Array Reverse" . "<br>";

$names = array("Sujit", "Amit", "Sumit");

print_r(array_reverse($names)); // Array ( [0] => Sumit [1] => Amit [2] => Sujit )

echo "<br>" . "<br>";

?>

<?php

// Array Slice
echo "Array Slice" . "<br>";

$names = array("Sujit", "Amit", "Sumit", "Rahul", "Rohit", "Rajesh");

print_r(array_slice($names, 2)); // Array ( [0] => Sumit [1] => Rahul [2] => Rohit [3] => Rajesh )

echo "<br>" . "<br>";

?>

<?php

// Array Sum
echo "Array Sum" . "<br>";

$age = array("21", "22", "23");

echo array_sum($age); // 66

echo "<br>" . "<br>";

?>

<?php

// Array Product
echo "Array Product" . "<br>";

$age = array("21", "22", "23");

echo array_product($age); // 13608

echo "<br>" . "<br>";

?>

<?php

// Array Unique
echo "Array Unique" . "<br>";

$names = array("Sujit", "Amit", "Sumit", "Amit");

print_r(array_unique($names)); // Array ( [0] => Sujit [1] => Amit [2] => Sumit )

echo "<br>" . "<br>";

?>

<?php

// Array Values
echo "Array Values" . "<br>";

$names = array("Sujit", "Amit", "Sumit");

print_r(array_values($names)); // Array ( [0] => Sujit [1] => Amit [2] => Sumit )

echo "<br>" . "<br>";

?>

<?php

// Array Keys
echo "Array Keys" . "<br>";

$names = array("Sujit", "Amit", "Sumit");

print_r(array_keys($names)); // Array ( [0] => 0 [1] => 1 [2] => 2 )

echo "<br>" . "<br>";

?>

<?php

// Array Pop
echo "Array Pop" . "<br>";

$names = array("Sujit", "Amit", "Sumit");

echo array_pop($names); // Sumit

echo "<br>" . "<br>";

?>

<?php

// Array Push
echo "Array Push" . "<br>";

$names = array("Sujit", "Amit", "Sumit");

echo array_push($names, "Rahul"); // 4

echo "<br>" . "<br>";


?>

<?php

// Array Shift
echo "Array Shift" . "<br>";

$names = array("Sujit", "Amit", "Sumit");

echo array_shift($names); // Sujit  

echo "<br>" . "<br>";

?>

<?php

// Array Unshift
echo "Array Unshift" . "<br>";

$names = array("Sujit", "Amit", "Sumit");

echo array_unshift($names, "Rahul"); // 4

echo "<br>" . "<br>";

?>

<?php

// Array Merge
echo "Array Merge" . "<br>";

$names = array("Sujit", "Amit", "Sumit");
$age = array("21", "22", "23");

print_r(array_merge($names, $age)); // Array ( [0] => Sujit [1] => Amit [2] => Sumit [3] => 21 [4] => 22 [5] => 23 )

echo "<br>" . "<br>";

?>

<?php

// Array Multisort
echo "Array Multisort" . "<br>";

$names = array("Sujit", "Amit", "Sumit");
$age = array("21", "22", "23");

array_multisort($names, $age);

print_r($names); // Array ( [0] => Amit [1] => Sumit [2] => Sujit )
print_r($age); // Array ( [0] => 22 [1] => 23 [2] => 21 )

echo "<br>" . "<br>";

?>

<?php

// Array Pad
echo "Array Pad" . "<br>";

$names = array("Sujit", "Amit", "Sumit");

print_r(array_pad($names, 5, "Rahul")); // Array ( [0] => Sujit [1] => Amit [2] => Sumit [3] => Rahul [4] => Rahul )

echo "<br>" . "<br>";

?>

<?php

// Array Fill
echo "Array Fill" . "<br>";

print_r(array_fill(0, 5, "Sujit")); // Array ( [0] => Sujit [1] => Sujit [2] => Sujit [3] => Sujit [4] => Sujit )

echo "<br>" . "<br>";

?>

<?php

// Array Fill Keys
echo "Array Fill Keys" . "<br>";

print_r(array_fill_keys(array("Sujit", "Amit", "Sumit"), "21")); // Array ( [Sujit] => 21 [Amit] => 21 [Sumit] => 21 )

echo "<br>" . "<br>";

?>

<?php

// Array Column
echo "Array Column" . "<br>";

$marks = array(
    array("Sujit", "21", "90"),
    array("Amit", "22", "80"),
    array("Sumit", "23", "70")
);


print_r(array_column($marks, 1)); // Array ( [0] => 21 [1] => 22 [2] => 23 )

echo "<br>" . "<br>";


?>

<?php

// Array Search
echo "Array Search" . "<br>";

$names = array("Sujit", "Amit", "Sumit");

echo array_search("Amit", $names); // 1

echo "<br>" . "<br>";

?>

<?php

// Array under Array
echo "Array under Array" . "<br>";

$marks = array(
    array("Sujit", "21", "90"),
    array("Amit", "22", "80"),
    array("Sumit", "23", "70")
);

echo $marks[0][0] . " " . $marks[0][1] . " " . $marks[0][2] . "<br>"; // Sujit 21 90
echo $marks[1][0] . " " . $marks[1][1] . " " . $marks[1][2] . "<br>"; // Amit 22 80
echo $marks[2][0] . " " . $marks[2][1] . " " . $marks[2][2] . "<br>"; // Sumit 23 70

echo "<br>" . "<br>";


?>