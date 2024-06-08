<?php

// Creating classes
class User
{
    // properties
    public $name;
    public $email;

    // methods
    public function login()
    {
        echo 'The user logged in';
    }
}

// Instantiate new object
$user1 = new User();

// Set values
$user1->name = 'John Doe';
$user1->email = 'john@john.com';
var_dump($user1);

echo '<hr>';

// call methods
$user1->login();

echo '<hr>';

// Class with constructor
class User1
{
    public $name;
    public $email;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function login()
    {
        echo $this->name . ' logged in';
    }
}

$john = new User1('John Doe', 'john@gmail.com');
echo $john->name . '<br>';
$john->login();

echo '<hr>';

$bob = new User1('Bob Bobby', 'bob@gmail.com');
echo $bob->name . '<br>';
$bob->login();

echo '<hr>';
