<?php
$db = new PDO("mysql:host=192.168.20.20;dbname=PortfolioProjects", 'root', '');
$db -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


$title = $_POST['title'];
$link = $_POST['link'];
$image = $_POST['image'];
$sqlProjects = "INSERT INTO `projects` (`title`, `link`, `image`) VALUES (:title, :link, :image);";
$queryProjects= $db->prepare($sqlAdult);
$addProject = $queryProjects->execute([':title'=>$title, ':link'=>$link, ':image'=>$image]);

echo 'Project was sucsessfully added';