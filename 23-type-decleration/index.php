<?php

// turn type declarations
declare(strict_types=1);

function getSum(int $a, int $b): int
{
    return $a + $b;
}

echo getSum(10, 20);
