<?php
// for loop
for ($i = 0; $i < 5; $i++) {
    echo $i;
    echo '<br>';
}
?>

<ul>
    <?php for ($i = 0; $i < 5; $i++) : ?>
        <li>Number: <?= $i ?></li>
    <?php endfor; ?>
</ul>

<hr>
<?php
// while loop
$i = 0;
while ($i < 5) {
    echo $i;
    echo '<br>';
    $i++;
}
?>

<ul>
    <?php $i = 0;
    while ($i < 5) : ?>
        <li>Number: <?= $i ?></li>
    <?php $i++;
    endwhile ?>
</ul>

<hr>

<?php
// do while
$i = 10;
do {
    echo $i;
    $i++;
    echo '<br>';
} while ($i < 5);
?>

<ul>
    <?php $i = 10;
    do { ?>
        <li>Number: <?= $i ?></li>
    <?php $i++;
    } while ($i < 5) ?>

</ul>