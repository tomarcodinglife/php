<?php

$name = "Sujit Tomar";
$age = 21;

echo "Name: $name <br>";
echo "Age: $age <br>";


// goto statement

if($age < 18){
    goto minor;

}else{
    goto major;
}  

minor:
    echo "You are a minor. <br>";
    goto end;

major:
    echo "You are a major. <br>";
    goto end;

end:
    echo "End of the code. <br>";



?>