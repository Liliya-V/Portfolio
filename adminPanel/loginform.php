<?php
if (!empty($_GET['login'])) {
    echo 'Username or password is incorrect';
}
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Edit project form</title>
        <link href="../css/normalize.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="../css/styleAdminPanel.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
<form action="login.php" method="POST">
    <label>Username:</label>
    <input type="text" name="username">
    <label>Password:</label>
    <input type="password" name="password">
    <input type="submit" name="Login">
</form>
    </body>
</html>
