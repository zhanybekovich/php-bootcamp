<?php
// looping arrays
$names = ['John Doe', 'Mike Boston', 'Jose Ramirez'];

$users = [
    ['name' => 'John', 'email' => 'john@john.com'],
    ['name' => 'Mike', 'email' => 'mike@mike.com'],
    ['name' => 'Mary', 'email' => 'mary@mary.com'],
];

// for loop
for ($i = 0; $i < count($names); $i++) {
    echo $names[$i] . '<br>';
}

?>

<hr>

<?php
// foreach
foreach ($names as $name) {
    echo $name . '<br>';
}

?>

<hr>

<ul>
    <?php foreach ($names as $name) : ?>
        <li><?= $name ?></li>
    <?php endforeach; ?>
</ul>

<hr>

<ul>
    <?php foreach ($users as $user) : ?>
        <li><?= $user['name'] . ' - ' . $user['email'] ?></li>
    <?php endforeach ?>
</ul>

<hr>
<ul>
    <?php foreach ($users as $user) : ?>
        <li>
            <?php foreach ($user as $key => $value) : ?>

                <?= $key . ' - ' . $value ?>

            <?php endforeach ?>
        </li>
    <?php endforeach ?>
</ul>