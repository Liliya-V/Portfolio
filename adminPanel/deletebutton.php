<?php
require('functions.php');
$db = new PDO("mysql:host=192.168.20.20;dbname=PortfolioProjects", 'root', '');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
if (!empty($_GET['id'])) {
    $id = $_GET['id'];
}
$sqlDelete = 'DELETE FROM `projects` WHERE `id`= ' . $id . ';';
$queryDelete= $db->query($sqlDelete );
if (!$queryDelete) {
    echo 'An object was not deleted';
    echo '<br><a href="adminPanel.php">Try again</a><br>';
} else {
    echo 'Project was successfully deleted.';
    echo '<a href="../portfolio.php">Go to your portfolio.</a>';
}