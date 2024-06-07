<?php
$listings = [
    [
        'id' => 1,
        'title' => 'UX Designer',
        'description' => 'Lorem ipsum text',
        'salary' => 50000,
    ],
    [
        'id' => 1,
        'title' => 'Coder',
        'description' => 'Lorem ipsum text',
        'salary' => 1250000,
    ],
    [
        'id' => 1,
        'title' => 'Accountant',
        'description' => 'Lorem ipsum text',
        'salary' => 80000,
    ],
]
?>

<hr>

<ul>
    <?php foreach ($listings as $listing) : ?>
        <li>
            <h3><?= $listing['title'] ?></h3>
            <p><?= $listing['description'] ?></p>
            <p><b>Salary:</b> $<?= $listing['salary'] ?></p>
        </li>
    <?php endforeach ?>
</ul>