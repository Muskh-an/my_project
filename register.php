<?php
include "config.php";

if (isset($_POST['register'])) {
    $username = $_POST['username'];

    $password = password_hash(
        $_POST['password'],
        PASSWORD_DEFAULT
    );

    mysqli_query(
        $conn,
        "INSERT INTO users(username,password)
         VALUES('$username','$password')"
    );

    echo "Registration Successful";
}
?>

<h2>Register</h2>

<form method="POST">

    Username:
    <input type="text" name="username">

    <br><br>

    Password:
    <input type="password" name="password">

    <br><br>

    <input type="submit"
        name="register"
        value="Register">

</form>

<a href="login.php">Login</a>