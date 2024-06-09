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
        <p>
            <?= $post['body'] ?>
        </p>
    </div>

    <div>
        <form action="delete.php" method="post">
            <input type="hidden" name="_method" value="delete">
            <input type="hidden" name="id" value="<?= $post['id'] ?>">
            <button type="submit" name="submit">Delete</button>
        </form>
    </div>

    <p>
        <a href="http://php-bootcamp.test/46-edit/edit.php?id=<?= $post['id'] ?>">Edit</a>
    </p>

</body>

</html>