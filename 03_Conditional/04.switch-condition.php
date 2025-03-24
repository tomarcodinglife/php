<?php

$age = 21;

switch($age){
    case 18:
        echo "You are just eligible to vote.";
        break;
    case 21:
        echo "You are eligible to vote.";
        break;
    default:
        echo "You are not eligible to vote.";
}


echo "<br>";

$name = "Rohit Kumar";

switch($name){
    case "Sujit Tomar":
        echo "You are Sujit Tomar.";
        break;
    case "Amit Kumar":
        echo "You are Amit Kumar.";
        break;
    default:
        echo "You are not Sujit Tomar or Amit Kumar. Your are $name";
}

?>