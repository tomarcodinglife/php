<?php

// syntax : setcookie(name, value, expire, path, domain, secure, httponly);

// name (string): The name of the cookie.
// value (string): The value of the cookie.
// expire (int): The time when the cookie expires (in seconds). You can set it using time() + seconds.
// path (string): The path where the cookie is available (default is /).
// domain (string): The domain where the cookie is available (default is current domain).
// secure (bool): If true, cookie will only be sent over HTTPS.


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