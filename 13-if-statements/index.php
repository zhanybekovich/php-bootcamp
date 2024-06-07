<?php
$age = 20;
// if statement
if ($age >= 21) {
    echo 'Allowed!';
}

echo '<hr>';

// if else
if ($age >= 21) {
    echo 'Allowed!';
} else {
    echo 'Not Allowed!';
}

echo '<hr>';

// nested
if ($age >= 21) {
    echo 'Allowed!';
} else {
    if ($age >= 18) {
        echo 'Vote!';
    } else {
        echo 'Can note vote!';
    }
}

echo '<hr>';

// If-else-if
if ($age >= 21) {
    echo 'Can vote & drink';
} else if ($age >= 18) {
    echo 'Can vote';
} else {
    echo 'Young!';
}
