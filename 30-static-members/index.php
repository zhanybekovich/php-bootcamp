<?php

// Static members
/*

Static Properties: A static property is a property of a class that is shared among all instances of the class. This means that if you change the value of a static property in one instance, it will be changed for all instances.

Static Methods: A static method is a method that belongs to the class itself rather than any instance of the class. You can call a static method without creating an instance of the class.

In PHP, the :: operator, also known as the Scope Resolution Operator (or Paamayim Nekudotayim, which means "double colon" in Hebrew), is used for accessing static, constant, and overridden properties or methods of a class.
*/

class MathUtility
{
    static $pi = 3.14;

    public static function add(...$nums)
    {
        return array_sum($nums);
    }
}

// access to property without instantiating
echo MathUtility::$pi;
echo '<br>';
echo MathUtility::add(1, 2, 3);
