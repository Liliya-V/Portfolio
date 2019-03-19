<?php
$db = new PDO("mysql:host=192.168.20.20;dbname=PortfolioProjects", 'root', '');
$db -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
if(!empty($_POST['title'])) {
    $title = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
    if(!empty($_POST['link'])) {
        $site_url = filter_var($_POST['link'], FILTER_VALIDATE_URL);
    }
$title = $_POST['title'];
$link = $_POST['link'];
$image = 'images/' . $_POST['image'];
$sqlProjects = "INSERT INTO `projects` (`title`, `link`, `image`) VALUES (:title, :link, :image);";
$queryProjects= $db->prepare($sqlProjects);
$addProject = $queryProjects->execute([':title'=>$title, ':link'=>$link, ':image'=>$image]);
if (!$_POST['title'] || !$_POST['link'] || !$_POST['image']) {
    echo  'Please, check if you filled all three lines';
    echo'.';
    echo '<td><a href="addForm.php">Go back</a></td>';
} else {
    echo 'Project was successfully added';}
}




