<?php
// Access modifies
/*
- 'public' -> property or method can be accessed anywhere

- 'protected' -> property or method can be accessed from within the class or any class that inherits from it

- 'private' -> property can ONLY be accessed from within the class
*/
class User
{
    public $name;
    public $email;
    private $status = 'active';

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function login()
    {
        echo $this->name . ' logged in';
    }

    // getter
    public function getStatus()
    {
        return $this->status;
    }

    // setter
    public function setStatus($status)
    {
        $this->status = $status;
    }
}

$john = new User('John', 'john@john.com');

// call getter
echo $john->getStatus() . '<br>';

// call setter
$john->setStatus('inactive');
echo $john->getStatus() . '<br>';
