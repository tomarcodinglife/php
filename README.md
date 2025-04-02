<h2> Introduction </h2>

<h3> about php </h3>
<p> "PHP (Hypertext Preprocessor) is a case-insensitive and widely-used server-side scripting language designed for web development. It is mainly used for create dynamic and interactive websites and web pages. PHP can be embedded into HTML code and works on the server to generate content randomly and sent to the client's browser.</p>

<h3>Key Features of PHP</h3>
<p>1. Server-Side Language: PHP scripts run on the server before the webpage is sent to the user. <br>
2. Cross-Platform: PHP works on multiple platforms, including Windows, macOS, and Linux. <br>
3. Database Integration: PHP can connect to databases like MySQL, PostgreSQL, and MongoDB, making it ideal for 4. developing data-driven websites. <br>
5. Open Source: PHP is free to use and has a large community of developers. <br>
6. Easy to Learn: PHP has a simple syntax that makes it easy for beginners, but it's powerful enough for professional developers. <br>
7. Integration with HTML, CSS, and JavaScript: PHP can seamlessly integrate with HTML for front-end design and can be used alongside JavaScript for more interactive web experiences. <br> </p>


<h2> php Setup Process </h2>

<h3>Download Xampp</h3>
<p>XAMPP is a free and open-source cross-platform web server solution stack package developed by Apache Friends, consisting mainly of the Apache HTTP Server, MariaDB (formerly MySQL), and interpreters for scripts written in PHP and Perl</p>

<p>1. Go to the official XAMPP website: https://www.apachefriends.org.<br>
2. On the homepage, click the "Download" button.<br>
3. Choose the version that matches your operating system (Windows, macOS, or Linux).<br>
4. Select the appropriate version of XAMPP that you want to download (based on your PHP version preference). </p>

<h3>Install Xampp</h3>
<p> 1. Once the download is complete, locate the downloaded installer file and run it.
2. Windows: Right-click the installer and select "Run as Administrator."
3. macOS/Linux: You may need to give the installer permission to run by right-clicking and selecting "Open" or 4. using terminal commands. </p>

<h3>Start Apache in Xampp </h3>
<p>Start Apache by Xampp Control Panel application from installed pc</p>

<h3>Make a folder and file for php</h3>
<p>create a file under installed xampp directory htdocs</p>

<h3>Test php is installed or not</h3>
<p>after write some php code you can test it</p>

<h2> XAMPP </h2>

<h3>Apache</h3>
<p>Start Apache by Xampp Control Panel application from installed pc</p>

<h3>Apache Not Run with same port then</h3>
<p>If apache not run then change port from xampp\apache\conf\httpd.conf file</p>

<h2> Variables in PHP</h2>

<h3> Rules for variables in PHP</h3>
<p>1. Variables Must Start with a Dollar Sign </p>
<ul> <li>All PHP variables must begin with the dollar sign ($).</li> </ul>


```php
<?php
$name = "Sujit";  // Valid
?>

```

<p>2. Variable Names Must Start with a Letter or Underscore (_) </p>
<ul> <li>After the dollar sign, a variable name must start with a letter (a-z, A-Z) or an underscore (_)</li></ul>
<ul> <li>It cannot start with a number</li></ul>

```php
<?php
$name = "John";  // Valid
$_name = "Doe";  // Valid
$1name = "Invalid";  // Invalid (cannot start with a number)
?>

```

<p>3. Variable Names Can Contain Letters, Numbers, and Underscores </p>
<ul> <li>After the first letter or underscore, variable names can contain letters, numbers (0-9), and underscores (_)</li></ul>

```php
<?php
$var1 = 10;      // Valid
$name_1 = "PHP"; // Valid
$name123 = "Code";  // Valid
?>

```

<p>4. Variables are Case-Sensitive </p>
<ul> <li>Variable names in PHP are case-sensitive. This means $name, $Name, and $NAME are considered different variables.</li></ul>

```php
<?php
$name = "Sujit";
$Name = "Kumar";
echo $name;  // Output: Sujit
echo $Name;  // Output: Kumar
?>

```

<p>5. No Spaces in Variable Names </p>
<ul><li>You cannot have spaces in variable names. If you need to separate words in a variable name, use an underscore (_) or camelCase (e.g., $myVariable).</li></ul>

```php
<?php
$my_name = "John";   // Valid
$myName = "John";    // Valid
$my name = "John";   // Invalid (spaces not allowed)
?>

```

<p>6. Predefined and Reserved Variable Names </p>
<ul><li>PHP has several predefined variables such as $_GET, $_POST, $_SERVER, etc. You should avoid using these names as regular variable names to prevent conflicts.</li></ul>
<ul><li>Avoid using PHP reserved keywords (like class, function, public, etc.) as variable names.</li></ul>

```php
<?php
$class = "SomeClass";  // Avoid using reserved keywords
?>

```

<p>7. Variables are Dynamically Typed </p>
<ul><li>You don't need to declare the type of a variable in PHP. It is dynamically typed, meaning a variable can change its type based on the assigned value.</li></ul>

```php
<?php
$x = 10;        // Integer
$x = "Hello";   // String
?>

```

<p>8. Variable Scope </p>
<ul><li>Variables can have local, global, and static scope.</li></ul>
<ul><li>To access global variables inside a function, you need to use the global keyword or $GLOBALS array.</li></ul>

```php
<?php
$x = 5;  // Global scope

function myFunction() {
    global $x;  // Access global variable
    echo $x;
}

myFunction();  // Output: 5

?>

```

<h3>Error Display Enable</h3>
<p>you can find the php.ini file in directory and make sure display_errors = On. you can find directory php.ini using php function.</p>

```php
<?php
echo phpinfo();
?>

```

<h3>Constants Variable</h3>
<p> <ol>  
<li> Case Sensitivity: By default, constants are case-sensitive, but you can make them case-insensitive. </li> 
<li> Naming: Constant names do not need a $ symbol at the beginning, unlike regular variables. </li> 
<li> Global Scope: Constants are automatically global and can be accessed from anywhere in the script. </li> 
</ol> </p>

```php

<?php

const name = "Sujit Tomar"; // This will create a constant variable.
$age = 21; // This will create a variable.
const __address = "Bangalore";  // This will create a constant variable.
define("email", "sujit@google.com");  // This will also create a constant variable.

const name = "Sujit Singh Rajput"; // This will throw an error because we can't change the value of constant.
age = 20; // This will throw an error because we can't create a variable without $ sign.
$age = 20; // This will change the value of variable. because variable can be changed.
email = "abc@gmail.com";  // This will throw an error because we can't change the value of constant.

echo "Name: " . name . "<br>";
echo "Age: " . $age . "<br>";
echo "Address: " . __address . "<br>";
echo "Email: " . email . "<br>";

?>
```


<p> <ul>  
<li> Scope: const can only be used to declare constants inside the global scope or within classes, while define() can be used to declare constants anywhere. </li> 
<li> Constancy of Expression: const can only be used with scalar values (like strings, numbers, or booleans), while define() can take more complex expressions or even the result of function calls. </li>  
</ul> </p>

<h2>Data Type</h2>

<h3>String Data Type</h3>
<p>A string is a sequence of characters, like text.</p>


```php
<?php
$greeting = "Hello, World!";
echo $greeting;  // Output: Hello, World!
?>
```



<h3>Integer Data Type</h3>
<p>An integer is a non-decimal number, either positive or negative.</p>

```php
<?php
$number = 100;
echo $number;  // Output: 100
?>

```

<h3>Float (Double) Data Type</h3>
<p>A float (also called double) is a number with a decimal point or in exponential form.</p>

```php
<?php
$pi = 3.1416;
echo $pi;  // Output: 3.1416
?>

```

<h3>Boolean Data Type</h3>
<p>A boolean represents two possible states: TRUE or FALSE.</p>

```php
<?php
$is_logged_in = true;
$has_permission = false;

echo $is_logged_in;  // Output: 1 (True is represented as 1)
echo $has_permission; // Output: (False does not print anything)
?>

```

<h3>Array Data Type</h3>
<p>An array is a data structure that can hold multiple values in a single variable. It can store values of any data type.</p>

```php
<?php
$cars = array("BMW", "Audi", "Mercedes", 500, 18.5);
echo $cars[0];  // Output: BMW
?>

```

<h3>Object (Class) Data Type</h3>
<p>An object is an instance of a class, which can store both data and functions. Objects are created from user-defined classes.</p>

```php
<?php
class Car {
    public $make;
    public $model;

    public function __construct($make, $model) {
        $this->make = $make;
        $this->model = $model;
    }

    public function showCar() {
        return "Car: " . $this->make . " " . $this->model;
    }
}

$myCar = new Car("BMW", "X5");
echo $myCar->showCar();  // Output: Car: BMW X5
?>

```

<h3>NULL Data Type</h3>
<p>The NULL data type is used to represent a variable with no value. It can be assigned to any variable to clear its value.</p>

```php
<?php
$var = "Hello";
$var = NULL;
var_dump($var);  // Output: NULL
?>

```

<h3>Resource</h3>
<p>A resource is a special variable that holds a reference to an external resource, such as a file, database connection, or stream. You cannot create resources directly, but they are generated by functions like fopen()</p>

```php
<?php
$file = fopen("example.txt", "r");
var_dump($file);  // Output: resource(5) of type (stream)
?>


```

<h3>Example of Checking Data Types</h3>
<p>PHP provides the gettype() function to check the type of a variable.</p>

```php
<?php
$age = 25;
echo gettype($age);  // Output: integer
?>

```

<h3>Type Juggling in PHP</h3>
<p>PHP automatically converts data types as needed, which is known as type juggling. For example:</p>

```php
<?php
$sum = "5" + 10;  // PHP converts the string "5" to an integer
echo $sum;        // Output: 15
?>

```

<h3>Comment in PHP</h3>
<p> php have two type of comments</p>

```php

// This is a single line comment

/*
This is a multi-line comment
This is a multi-line comment
This is a multi-line comment
This is a multi-line comment
*/  
// Hi Thiis is demo text

```


