<?php

// Nested function

// A function inside another function is called nested function.

// Example of nested function

function outerFunction(){
    echo "This is outer function. <br>";
    
    function innerFunction(){
        echo "This is inner function. <br>";
    }
    
    innerFunction();
}

outerFunction();
// innerFunction(); 



?>