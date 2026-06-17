<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>

<h1>Dashboard</h1>

Welcome
<?php echo $_SESSION['username']; ?>

<br><br>

<a href="create.php">Create Post</a>

<br><br>

<a href="read.php">View Posts</a>

<br><br>

<a href="logout.php">Logout</a>