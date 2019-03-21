<?php
if (!empty($_GET['login'])) {
    echo 'Username or password is incorrect';
}
?>

<form action="login.php" method="POST">
    <label>Username:</label>
    <input type="text" name="username">
    <label>Password:</label>
    <input type="password" name="password">
    <input type="submit" name="Login">
</form>
