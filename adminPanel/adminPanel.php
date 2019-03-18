<?php
$db = new PDO("mysql:host=192.168.20.20;dbname=PortfolioProjects", 'root', '');
$db -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$sql="SELECT `title` FROM `projects`;";
$query = $db->query($sql);
$titles = $query->fetchAll();
//if(isset($_POST['update'])){
//    $sqlUpdate = "UPDATE `projects` SET `title`='$_POST[title]', `link`='$_POST[link]', `image`='$_POST[image]';";
//    $queryUpdate = $db->
//
//}
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Portfolio Liliya Voevodina</title>
        <link href="css/normalize.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="css/styleAdminPanel.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>
    <h4>Projects management panel</h4>
    <?php
    echo '<table border=1>
        <tr>
            <th>TITLE</th>
            <th colspan="2">ACTION</th>
        </tr>';
        foreach ($titles as $title) {
            echo '<tr>';
            echo '<td>' .$title['title']. '</td>';
            echo '<td><a href="#">Edit</a>';
            echo '<td><a href="#">Delete</a>';
        }
        echo '</table>';
        ?>



</body>



<!---->
<!--    echo 'Projects management panel.';-->
<!--echo '<br><br><br>';-->
<!---->
<!--$sql="SELECT `title` FROM `projects`;";-->
<!--$query = $db->query($sql);-->
<!--$titles = $query->fetchAll();-->
<!-- foreach ($titles as $title) {-->
<!--     echo '$title['title']'-->
<!--           <a href="' . $project['link'] . '"><img class="demo" src="'. $project['image'] . '" alt="lamp"></a>-->
<!--           <h5>'.$project['title'].'</h5>-->
<!-- };-->


</html>
