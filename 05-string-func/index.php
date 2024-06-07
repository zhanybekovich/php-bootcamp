<?php
$string = 'Hello World!';

// length
echo strlen($string);
echo '<hr>';

// word count
echo str_word_count($string);
echo '<hr>';

// str position
echo strpos($string, 'World');
echo '<hr>';

// get specific char by index
echo $string[4];
echo '<hr>';

// substring
echo substr($string, 2, 5);
echo '<hr>';

// replace
echo str_replace('World', 'Boy', $string);
echo '<hr>';

// lower
echo strtolower($string);
echo '<hr>';

// uppercase
echo strtoupper($string);
echo '<hr>';

// title case
echo ucwords($string);
echo '<hr>';

// trim
echo trim($string);
echo '<hr>';
