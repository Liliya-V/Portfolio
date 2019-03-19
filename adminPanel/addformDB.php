<?php
$db = new PDO("mysql:host=192.168.20.20;dbname=PortfolioProjects", 'root', '');
$db -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$image = 'images/' . $_POST['image'];
$sqlProjects = "INSERT INTO `projects` (`title`, `link`, `image`) VALUES (:title, :link, :image);";
$queryProjects= $db->prepare($sqlProjects);

if(!empty($_POST['title'])) {
    $title = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
    if (!empty($_POST['link'])) {
        $link = filter_var($_POST['link'], FILTER_VALIDATE_URL);
    }
}
if ($_POST['title'] || $_POST['link'] || $_POST['image']) {
    $addProject = $queryProjects->execute([':title'=>$title, ':link'=>$link, ':image'=>$image]);
    echo 'Project was successfully added.  ';
    echo '<br><a href="addForm.php">Add another one. </a><br>';
    echo '<a href="../portfolio.php">Go to your portfolio. </a>';
}





