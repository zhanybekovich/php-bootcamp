<?php
// set ENV
putenv('DB_HOST=localhost');
putenv('DB_USER=root');

// get ENV
$host = getenv('DB_HOST');
$user = getenv('DB_USER');

echo $host;

echo '<hr>';
echo $user;

// get all ENV
// var_dump(getenv());

echo '<hr>';

// all vars in global scope
$foo = 'Hello';
echo $GLOBALS['foo'];
echo '<hr>';
