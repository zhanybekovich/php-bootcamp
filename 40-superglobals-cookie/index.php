<?php

// $_COOKIE - vars passed to script via HTTP cookies

// Create cookie
setcookie('username', 'john doe', time() + 3600, '/');

// Use cookie
echo '<pre>';
var_dump($_COOKIE);
echo '</pre>';

$username = $_COOKIE['username'] ?? 'Guest';
echo $username;

// Destroy cookie
setcookie('username', '', time() - 36000, '/');
