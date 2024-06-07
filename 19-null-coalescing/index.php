<?php

/*

Null coalescing operator
The null coalescing operator, introduced in PHP 7, is a handy tool for dealing with null values. It's written as ?? and simplifies checks for nullity before assigning a default value.

Here's how it works:

- The operator takes two operands.
- If the left operand is not null, it's returned directly.
- If the left operand is null, the right operand is returned instead.

*/


// $favoriteColor = 'red';

// $color = isset($favoriteColor) ? $favoriteColor : 'blue';

// echo $color;

$favoriteColor;

$color = $favoriteColor ?? 'blue';

echo $color;
