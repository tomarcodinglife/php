<?php
$name = "Sujit Kumar Singh";

function detail(){
    $myname = "Sujit Tomar";
    echo $myname;
}

echo $name; // Sujit Kumar Singh
echo "<br>";
detail(); // Sujit Tomar
echo $myname // Its not working because this is not global it is local



?>