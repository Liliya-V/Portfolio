<?php
session_start();
if  (empty($_SESSION['loggedin']) ||
     $_SESSION['loggedin']!=true) {
    header('location:loginform.php');
}
$db = new PDO("mysql:host=192.168.20.20;dbname=PortfolioProjects", 'root', '');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$sql = "SELECT `id`,`title` FROM `projects`;";
$query = $db->query($sql);
$titles = $query->fetchAll();
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Admin panel</title>
        <link href="../css/normalize.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="../css/styleAdminPanel.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
 <body>
    <h1>Projects management panel</h1>
      <?php
        echo '<h3 class="addbutton"><a class="addbutton" href="addForm.php">Add new project</a></h3>';
        echo '<table border=3>
        <tr>
            <th>TITLE</th>
            <th colspan="2">ACTION</th>
        </tr>';
        foreach ($titles as $title) {
            echo '<tr>
            <td>' .$title['title']. '</td>
            <td><a class="editbutton" href="editform.php?id=' . $title['id'] . '">Edit</a></td>
            <td><input class="deletebutton" type="submit" name="delete" value="Delete"></td>';
           }
        echo '</table>';
      ?>
 </body>
</html>
