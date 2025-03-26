<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies With Request</title>
</head>
<body>

    <form action="" method="post">

        <input type="text" name="user" placeholder="enter user name"/>
        <br>
        </br>

        <button name="button" value="set">Set Cookies</button>
        <button name="button" value="display">Display Cookies</button>
        <button name="button" value="delete">Delete Cookies</button>

    </form>

</body>
</html>

<?php

if (isset($_POST['button']))
    {
        if($_POST['button'] =="set")
        {
            if(empty($_POST['user']))
            {
                echo 'user is empty. Please enter valid username';
            } else
            {
                $val = $_POST['user'];
                // echo $val;
                setcookie("user", $val, );
                echo "cookies is set for user : $val";
            }
        }

        if($_POST['button'] =='display')
        {
            if(empty($_COOKIE['user'])){
                echo 'Cookie is empty. Please set cookie before display';
            }else{
                if(isset($_COOKIE['user']));
                echo $_COOKIE['user'];
            }
        }

        if($_POST['button'] =='delete')
        {
            if(empty($_COOKIE['user'])){
                echo 'Cookie already empty. Please set cookie before deleted';
            }else{
                if(isset($_COOKIE['user']));
                setcookie('user', null, -1);
                echo ($_COOKIE['user'])." is deleted";
            }
        }
    }

?>