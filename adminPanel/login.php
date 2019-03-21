<?php
define ('USERNAME', 'Liliya_portfolio');
define ('Password', '$2y$10$CudgPciI3HI7muiuYmX9c.pxj9e7dSiij1LX3T8CVyA4mlC0KOsei');
if (!empty($_POST['username']) &&
    !empty($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    SESSION_START();
    if ($username == USERNAME &&
        password_verify($password, PASSWORD)) {
        $session['loggedIn'] = true;
        header('location:adminPanel.php');
    } else {
        header('location:loginform.php?login=false');
    }
    } else {
    echo 'Username or password were net provided';

}
