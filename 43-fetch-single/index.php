<?php
require 'database.php';

// Prepare a SELECT statement
$stmt = $pdo->prepare('SELECT * FROM posts');

// Execute statement
$stmt->execute();

// Fetch results
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

// echo '<pre>';
// var_dump($results);
// echo '</pre>';
?>

<ul>
    <?php foreach ($results as $post) : ?>
        <li>
            <h2><a href="http://php-bootcamp.test/43-fetch-single/post.php?id=<?= $post['id'] ?>"><?= $post['title'] ?></a></h2>
            <p><?= $post['body'] ?></p>
        </li>
    <?php endforeach ?>
</ul>