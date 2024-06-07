<?php
$name = 'John';
$isLogged = true;
?>

<?php if ($isLogged) : ?>
    <h1>Welcome, <?= $name ?></h1>
<?php else : ?>
    <h1>Please Log In!</h1>
<?php endif; ?>