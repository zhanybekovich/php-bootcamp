<?php
// Lambda/Anonymous functions

$square = function ($number) {
    return $number * $number;
};

$result = $square(5);
echo $result;

echo '<hr>';

// closures
function createCounter()
{
    $count = 0;

    $counter = function () use (&$count) {
        return ++$count;
    };

    return $counter;
}

$myCounter = createCounter();
echo $myCounter() . '<br>';
echo $myCounter() . '<br>';
echo $myCounter() . '<br>';
echo $myCounter() . '<br>';

echo '<hr>';

$myCounter2 = createCounter();
echo $myCounter2() . '<br>';
echo $myCounter2() . '<br>';
echo $myCounter2() . '<br>';
echo $myCounter2() . '<br>';
echo $myCounter2() . '<br>';
