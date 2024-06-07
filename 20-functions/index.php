<?php
// Functions

function sayHello()
{
    echo 'Hello World!' . '<br>';
}

sayHello();
sayHello();

// return value
function sayGoodBye()
{
    return 'Good Bye' . '<br>';
}

echo sayGoodBye();
echo sayGoodBye();

echo '<hr>';

// parameters
function add($num1, $num2)
{
    return $num1 + $num2;
}

echo add(10, 20);
echo '<hr>';

echo add(1456, 6489.9);
echo '<hr>';

// default param
function add2($num1 = 0, $num2 = 0)
{
    return $num1 + $num2;
}
echo add2();
echo '<hr>';

// args
function add3(...$numbers)
{
    $total = 0;
    foreach ($numbers as $number) {
        $total += $number;
    }
    return $total;
}
echo add3(1, 2, 4);
echo '<hr>';

echo add3(1, 2);
echo '<hr>';
