<?php
require('functions.php');
$db = new PDO("mysql:host=192.168.20.20;dbname=PortfolioProjects", 'root', '');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$sqlProjects = "INSERT INTO `projects` (`title`, `link`, `image`) VALUES (:title, :link, :image);";
$queryProjects= $db->prepare($sqlProjects);

if (validateProject($_POST)) {
    $addProject = $queryProjects->execute(setVariables($_POST));
    echo 'Project was successfully added.';
    echo '<br><a href="addForm.php">Add another one. </a><br>';
    echo '<a href="../portfolio.php">Go to your portfolio. </a>';
    echo '<br><a href="adminPanel.php">Go back to admin panel. </a>';
} else {
    echo 'Please fill all lines';
    echo '<br><a href="addForm.php">Try again</a><br>';
}