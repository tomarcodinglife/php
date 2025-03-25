<?php



setcookie("username", "SUJIT956", (time()+86400*24));
setcookie("password", "abc@5525", (time()+86400*24));
setcookie("email", "sujit@google.com", (time()+86400*24));

if(isset($_COOKIE["username"])){
    echo 'username cookie is set';
}else{
    echo 'username cookie is not set';
}

echo "<br>";

if(isset($_COOKIE["password"])){
    echo 'password cookie is set';
}else{
    echo 'password cookie is not set';
}

?>