<?php
require 'database.php';

$id = $_GET['id'] ?? null;

// echo $id;

if (!$id) {
    header('Location: index.php');
}

$sql = 'SELECT * FROM posts WHERE id = :id';

$stmt = $pdo->prepare($sql);

$stmt->execute(['id' => $id]);

$post = $stmt->fetch();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $post['title'] ?></title>
</head>

<body>

    <h1><?= $post['title'] ?></h1>

    <div>
        <?= $post['body'] ?>
    </div>

</body>

</html>