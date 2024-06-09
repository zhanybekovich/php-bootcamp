<?php
// $_SESSION - session vars available to the script

// to start working with session start session
session_start();

// set value
$_SESSION['name'] = 'John';

// usage
if (isset($_SESSION['name'])) {
    echo $_SESSION['name'];
} else {
    echo 'No value name in the session!';
}

// destroy session
unset($_SESSION['name']);

// destroy entire session
session_destroy();
