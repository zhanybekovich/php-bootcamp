<?php

// Global scope
$name = 'Bob';
echo $name;

function sayHello()
{
    // $name is in the local scope
    // echo 'Hello' . $name;

    // using global within function scope
    global $name;
    echo 'Hello' . $name;
}

sayHello();
