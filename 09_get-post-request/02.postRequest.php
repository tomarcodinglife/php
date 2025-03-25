<?php

// echo "Hi Your User Name is ". $_GET['user-name'];
// echo "<br>";
// echo "Hi Your User Password is ".$_GET['user-password'];


// print_r($_POST);

if($_POST){
    echo "Username is :". $_POST['user-name'];
    echo "<br>";
    echo "Password is :". $_POST['user-password'];
    echo "<br>";
    echo "Email is :". $_POST['user-email'];
}

?>