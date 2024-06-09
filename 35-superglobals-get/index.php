<?php
// GET super global
// $_GET - vars passed to the script via query params and GET forms

// Example: http://localhost:8000?query=football&sort=asc&limit=10
// var_dump($_GET);
echo '<hr>';

// echo $_GET['name'];
echo '<hr>';
// echo $_GET['sort'];

// not SECURE
// http://php-bootcamp.test/35-superglobals-get?name=tom&sort=asc?%3Cscript%3Ealert(1);%3C/script%3E
echo htmlspecialchars($_GET['name']);
