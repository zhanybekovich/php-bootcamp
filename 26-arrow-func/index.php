<?php

// Arrow functions
$add = fn ($a, $b) => $a + $b;
echo $add(3, 5);

echo '<hr>';

// Usage in callbacks
$numbers = [1, 2, 3, 4, 5];
$squaredNumbers = array_map(fn ($number) => $number * $number, $numbers);
var_dump($squaredNumbers);
