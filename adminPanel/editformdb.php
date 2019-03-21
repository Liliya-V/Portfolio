<?php
require('functions.php');
$db = new PDO("mysql:host=192.168.20.20;dbname=PortfolioProjects", 'root', '');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
if (!empty($_GET['id'])) {
    $id = $_GET['id'];
}
$sqlProjects = "UPDATE `projects` SET `title` = :title, `link` = :link, `image` = :image WHERE `id`= :id;";
$queryProjects= $db->prepare($sqlProjects);

if (validateProject($_POST)) {
    $data = setVariables($_POST);
    $data[':id'] = $id;
    $editProject = $queryProjects->execute($data);
    if (!$editProject) {
        echo 'Hmmmm, i think you need to';
        echo '<br><a href="editform.php">Try again</a><br>';
        echo ', because something went wrong';
    } else {
        echo 'Project was successfully edited.';
        echo '<a href="../portfolio.php">Go to your portfolio. </a>';
    }
} else {
        echo 'Something went wrong....dont\' cry, just ';
        echo '<br><a href="editform.php">Try again</a><br>';
    }