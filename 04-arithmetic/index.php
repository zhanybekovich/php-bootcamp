<?php
/* 
 Arithmetic operators
 + -> addition
 - -> subtraction
 * -> multiplication
 / -> division
 % -> modulo
 */

echo 100 + 1;

echo '<hr>';

echo 99 - 1;

echo '<hr>';

echo 5 * 3;

echo '<hr>';

echo 10 / 3;

echo '<hr>';

echo 10 % 3;

echo '<hr>';

/* Assignment operators
 = -> simple assignment
 += -> addition assignment
 -= -> subtraction assignment
 *= -> multiplication assignment
 /= -> division assignment
 %= -> modulo assignment
 */

$x = 10;
$x += 5;

echo $x;

echo '<hr>';

$y = 10;
$y *= 5;

echo $y;

echo '<hr>';

$z = 10;
$z /= 5;

echo $z;

echo '<hr>';

$w = 10;
$w %= 3;

echo $w;

echo '<hr>';

/* Built-in functions */
// random number
echo rand();

echo '<hr>';

echo rand(1, 10);

echo '<hr>';

// rounding
echo round(4.7);

echo '<hr>';

echo round(4.3);

echo '<hr>';

echo ceil(4.3);

echo '<hr>';

echo floor(4.7);

echo '<hr>';

// sqrt
echo sqrt(64);

echo '<hr>';

// PI
echo pi();

echo '<hr>';

// abs
echo abs(-60);

echo '<hr>';

// max
echo max(0, 100, 55, 20);

echo '<hr>';

// min
echo min(-4, 0, 100, 55, 20);

echo '<hr>';

// number format
echo number_format(1234567.123456, 2);

echo '<hr>';

echo number_format(1234567.123456, 2, '.', ' ');
