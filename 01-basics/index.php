<?php
// Printing 
echo "Hello From PHP";
echo 'Value One', 'Value Two';

print "Hello Again";

echo '<hr>';

// Variables
/*
- prefixed with $ sign
- case sensitive

** Naming COnventions **
- underscore $server_name -> for internal variables
- camelCase $serverName -> for functions
- PascalCase $ServerName -> for classes
*/

$title = 'Learn PHP';
echo $title;

echo '<hr>';

// Data Types
/*
- String: sequence of characters
- Integer: whole number. Negative or Positive
- Float: Number with decimal point
- Boolean: true or false
- Array
- Object
- NULL
- Resource
*/

// String
$userName = "John";
$userName2 = 'Bob';
var_dump($userName);
echo '<br>';
echo gettype($userName2);

echo '<hr>';

// Integer
$age = 34;
var_dump($age);
echo '<br>';
echo gettype($age);

echo '<hr>';

// Float
$rating = 4.5;
var_dump($rating);
echo '<br>';
echo gettype($rating);

echo '<hr>';

// Boolean
$isLoaded = true;
var_dump($isLoaded);
echo '<br>';
echo gettype($isLoaded);

echo '<hr>';

// Array
$users = ['John', 'Bob', 'Jane'];
var_dump($users);
echo '<br>';
echo gettype($users);

echo '<hr>';

// Object
$person = new stdClass();
var_dump($person);
echo '<br>';
echo gettype($person);

echo '<hr>';

// NULL
$car = null;
var_dump($car);
echo '<br>';
echo gettype($car);

echo '<hr>';

// Resource
$file = fopen('index.php', 'r');
var_dump($file);
echo '<br>';
echo gettype($file);

echo '<hr>';
