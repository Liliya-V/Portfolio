<?php
require('functions.php');
$db = new PDO("mysql:host=192.168.20.20;dbname=PortfolioProjects", 'root', '');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$id = $_GET['id'];
$sqlProjects = "UPDATE `projects` SET `title` = :title, `link` = :link, `image` = :image WHERE `id`= :id;";
$queryProjects= $db->prepare($sqlProjects);

if (validateProject($_POST)) {
    $data = setVariables($_POST);
    $data[':id'] = $id;
    $addProject = $queryProjects->execute($data);
    echo 'Project was successfully edited.';
    echo '<a href="../portfolio.php">Go to your portfolio. </a>';
} else {
    echo 'Please fill all lines';
    echo '<br><a href="editform.php">Try again</a><br>';
}








