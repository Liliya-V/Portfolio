<?php
require('functions.php');
$db = new PDO("mysql:host=192.168.20.20;dbname=PortfolioProjects", 'root', '');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $sqlDelete = 'DELETE FROM `projects` WHERE `id`=?;';
    $queryDelete = $db->prepare($sqlDelete);
    $deleteproject = $queryDelete->execute([$id]);
    if (!$deleteproject) {
        echo 'An object was not deleted';
        echo '<br><a href="adminPanel.php">Try again</a><br>';
        echo '<br><a href="../portfolio.php">Go to your portfolio.</a><br>';
    } else {
        header('location:adminPanel.php');
    }
} else  {
    echo 'Something went wrong :( ';
    echo '<br><a href="adminPanel.php">Try again</a><br>';

}