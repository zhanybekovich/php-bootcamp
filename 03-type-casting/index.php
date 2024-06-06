<?php

// implicit casting
$number1 = 5;
$number2 = 10;
$number3 = '20';

$result = $number1 + $number2;
var_dump($result);

echo '<hr>';

$result = $number1 + $number3;
var_dump($result);

echo '<hr>';

$result = $number3 + $number3;
var_dump($result);

$result = $number1 . $number2;
var_dump($result);

echo '<hr>';

// true is converted to 1 false is converted to 0
$result = $number1 + true; // 6
var_dump($result);

echo '<hr>';

// null is converted to 0
$result = $number1 + null;
var_dump($result);

echo '<hr>';

// explicit casting
var_dump((int) '5');
var_dump((float) '5.5');
var_dump((string) 5);
var_dump((bool) 0);
var_dump((bool) 15);
var_dump((bool) 'false');

echo '<hr>';
