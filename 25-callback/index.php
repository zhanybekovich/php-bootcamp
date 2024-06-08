<?php

// Callback functions
$numbers = [1, 2, 3, 4, 5];

$squaredNumbers = array_map(function ($number) {
    return $number * $number;
}, $numbers);

var_dump($squaredNumbers);

echo '<hr>';

$numToString = function ($number) {
    return (string) $number;
};

$stringNumbers = array_map($numToString, $numbers);
var_dump($stringNumbers);
