<?php

$age = 21;

if($age > 18){
    echo "You are eligible to vote.";
}
else if($age == 18){
    echo "You are just eligible to vote.";
}
else{
    echo "You are not eligible to vote.";
}


echo "<br>";

$name = "Rohit Kumar";

if($name == "Sujit Tomar"){
    echo "You are Sujit Tomar.";
}
else if($name == "Amit Kumar"){
    echo "You are Amit Kumar.";
}
else{
    echo "You are not Sujit Tomar or Amit Kumar. Your are $name";
}

?>