<?php

include "config.php";

if (isset($_POST['save'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];

    mysqli_query(
        $conn,
        "INSERT INTO posts(title,content)
         VALUES('$title','$content')"
    );

    echo "Post Added Successfully";
}

?>

<h2>Create Post</h2>

<form method="POST">

    Title:
    <input type="text" name="title">

    <br><br>

    Content:
    <textarea name="content"></textarea>

    <br><br>

    <input type="submit"
        name="save"
        value="Save Post">

</form>

<br>

<a href="dashboard.php">Back to Dashboard</a>