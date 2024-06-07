<?php
// creating associative array
$user = [
    'name' => 'John',
    'email' => 'john@john.com',
    'password' => '12345',
    'hobbies' => ['swimming', 'tennis', 'coding']
];

// access 
echo $user['name'];
echo '<hr>';

echo $user['hobbies'][0];
echo '<hr>';

// add new item
$user['address'] = '12 Main str';
echo $user['address'];
echo '<hr>';

// remove
unset($user['address']);
var_dump($user);
echo '<hr>';

// multi-dimension arrays
$fruits = [
    ['Apple', 'Red'],
    ['Orange', 'Orange'],
    ['Banana', 'Yellow']
];
echo $fruits[0][0];
echo '<hr>';

// add
$fruits[] = ['Grape', 'Blue'];
echo $fruits[2][0];
echo '<hr>';

// more example
$users = [
    ['name' => 'John', 'email' => 'john@john.com'],
    ['name' => 'Mary', 'email' => 'mary@john.com']
];

echo $users[0]['name'] . ' - ' . $users[0]['email'];
echo '<hr>';

array_push($users, ['name' => 'Medved', 'email' => 'medved@john.com']);
echo $users[2]['name'] . ' - ' . $users[2]['email'];
echo '<hr>';

// count 
echo count($users);
echo '<hr>';
