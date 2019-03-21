<?php
define ('USERNAME', 'Liliya');
define ('PASSWORD', '$2y$10$nndShKCDK2/qokmFytHNsuajSG5PxtY7gICsr6V6IDY92dFxHWIqG');
if (!empty($_POST['username']) &&
    !empty($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    SESSION_START();
    if ($username === USERNAME &&
        password_verify($password, PASSWORD)) {
        $_SESSION['loggedIn'] = true;
        header('location:adminPanel.php');
    } else {
        header('location:loginform.php?login=false');
    }
} else {
    echo 'Username or password were not provided (in login.php)';

}
