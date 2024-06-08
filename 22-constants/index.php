<?php

// Defining constants
define('APP_NAME', 'My Super App');
echo APP_NAME;

echo '<hr>';

// Another way defining constants
const DB_NAME = 'my_db';
const DB_HOST = 'localhost';
echo DB_NAME . ' ' . DB_HOST;

echo '<hr>';

// constants are accessible within functions
function run()
{
    echo DB_NAME;
}

run();

echo '<hr>';
