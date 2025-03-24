<?php

$name = "Sujit Tomar";

function details(){
    global $name ;
    $name = "Sujit";
    echo $name;
}

details();
echo "<br>";


function outerfun(){
    global $name;
    $name = "Rohit";
    echo $name;
    
    function innerfunction(){
        global $name;
        $name = "Amit";
        echo $name;
    }
}

outerfun();
echo "<br>";
innerfunction();

?>