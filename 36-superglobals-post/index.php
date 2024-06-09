<?php
// $_POST - vars passed to the script via POST forms
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    // var_dump($_POST);
    $title = htmlspecialchars($_POST['title']) ?? '';
    $description = htmlspecialchars($_POST['description']) ?? '';

    echo $title . ' - ' .  $description;
}
?>

<form method="POST">
    <label>
        <p>Title</p>
        <input type="text" name="title">
    </label>
    <label>
        <p>Description</p>
        <input type="text" name="description">
    </label>
    <p>
        <button type="submit" name="submit">Save</button>
    </p>
</form>