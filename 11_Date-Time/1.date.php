<?php

// Date, Month, Year

echo date("m"); // 03
echo "<br> </br>";

echo date("M"); // Mar
echo "<br> </br>";

echo date("y"); // 25
echo "<br> </br>";

echo date("Y"); // 2025
echo "<br> </br>";

echo date("d"); // 28
echo "<br> </br>";

echo date("D"); // Fri
echo "<br> </br>";

echo date("d M Y"); // 28 Mar 2025
echo "<br> </br>";

// Time - Hours, Minuts, Second

echo date_default_timezone_get(); // Europe/Berlin
echo "<br> </br>"; 

echo date("h"); // 03 (as per Europe/Berlin)
echo "<br> </br>"; 

// change time zone
date_default_timezone_set("Asia/Kolkata"); 
echo date_default_timezone_get(); // Asia/Kolkata
echo "<br> </br>"; 

echo date("h"); // 08 (as per Asia/Kolkata)
echo "<br> </br>"; 

echo date("H"); // 20 (as per Asia/Kolkata) - 24 hours formate
echo "<br> </br>"; 

echo date("i"); // 04 (as per Asia/Kolkata) (Minute)
echo "<br> </br>"; 

echo date("sa"); // 32pm (Second)
echo "<br> </br>";

echo date("h:i:s"); // 08:06:39
echo "<br> </br>";




?>