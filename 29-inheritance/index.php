<?php

class User
{
    public $name;
    public $email;
    protected $status = 'active';

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

// Inheritance
class Admin extends User
{
    public $level;

    public function __construct($name, $email, $level)
    {
        $this->level = $level;
        parent::__construct($name, $email);
    }


    // getter
    public function getStatus()
    {
        echo $this->status . '<br>';
    }

    // setter
    public function setStatus($status)
    {
        $this->status = $status;
    }

    // override method
    public function login()
    {
        echo $this->name . ' logged in ' . 'level is: ' . $this->status;
    }
}

$adminPete = new Admin('Pete', 'pete@pete.com', 5);

echo $adminPete->level . '<br>';
$adminPete->getStatus();
$adminPete->setStatus('newStatus');
$adminPete->getStatus();

echo '<br>';

// call override method
$adminPete->login();
