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
