<?php
// $_FILES - items uploaded to current script
echo '<pre>';
var_dump($_FILES, $_POST);
echo '</pre>';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $title = htmlspecialchars($_POST['title']) ?? '';
    $description = htmlspecialchars($_POST['description']) ?? '';

    $file = $_FILES['logo'];

    echo $title . ' - ' .  $description . ' - ' . $file['name'];
}
?>


<form method="POST" enctype="multipart/form-data">
    <label>
        <p>Title</p>
        <input type="text" name="title">
    </label>
    <label>
        <p>Description</p>
        <input type="text" name="description">
    </label>

    <label>
        <p>Logo</p>
        <input type="file" name="logo">
    </label>

    <p>
        <button type="submit" name="submit">Save</button>
    </p>
</form>