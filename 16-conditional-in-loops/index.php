<?php

$number = 1;

while ($number <= 10) {
    if ($number % 2 == 0) {
        echo $number . ' is EVEN <br>';
    } else {
        echo $number . ' is ODD <br>';
    }

    $number++;
}

echo '<hr>';

// break
for ($i = 0; $i <= 10; $i++) {
    if ($i === 5) {
        break;
    }

    echo $i . '<br>';
}

echo '<hr>';

// continue
for ($i = 0; $i <= 10; $i++) {
    if ($i === 5) {
        continue;
    }

    echo $i . '<br>';
}

echo '<hr>';
// conditional in foreach
$names = [
    'John' => 75,
    'Mike' => 85,
    'Bob' => 50,
];

foreach ($names as $name => $grade) {
    if ($grade >= 75) {
        echo $name . ' is a Good Student!' . '<br>';
    }
}
