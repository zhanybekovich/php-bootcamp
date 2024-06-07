<?php
// creating arrays
$names = array('John', 'Jack', 'Bob');
$numbers = [1, 2, 3, 4, 5];

var_dump($names);
echo '<hr>';
var_dump($numbers);
echo '<hr>';

// access by index
echo $names[1];
echo '<hr>';

// add element by index
$numbers[5] = 20;
$numbers[] = 25;
var_dump($numbers);
echo '<hr>';

// change by index
$numbers[1] = 500;
var_dump($numbers);
echo '<hr>';

// remove
unset($numbers[2]);
var_dump($numbers);
// reindex
$numbers = array_values($numbers);
echo '<hr>';

// functions
$ids = [101, 22, 45, 67];
$users = ['Pete', 'Maria', 'Helen'];

// count
echo count($ids);
echo '<hr>';

// sort -> manipulates existing array
sort($ids);
var_dump($ids);
echo '<hr>';

// rsort
rsort($ids);
var_dump($ids);
echo '<hr>';

// array_push
array_push($users, 'Brad');
var_dump($users);
echo '<hr>';

// pop
array_pop($users);
var_dump($users);
echo '<hr>';

// shift
array_shift($users);
var_dump($users);
echo '<hr>';

// unshift
array_unshift($users, 'Mike');
var_dump($users);
echo '<hr>';

// slice -> returns new array
$sliceOfUsers = array_slice($users, 0, 2);
var_dump($sliceOfUsers);
echo '<hr>';

// array_splice -> return portion of arr and replace
array_splice($ids, 1, 2, 'NewId');
var_dump($ids);
echo '<hr>';

// array sum
echo array_sum([10, 20, 30]);
echo '<hr>';

// search
echo array_search('Maria', $users);
echo '<hr>';

// in_array
echo in_array('Mike', $users);
echo '<hr>';

// explode: string to array
$tags = 'tech,code,programming';
$tagsArray = explode(',', $tags);
var_dump($tagsArray);
echo '<hr>';

// implode
$usersString = implode(',', $users);
var_dump($usersString);
echo '<hr>';
