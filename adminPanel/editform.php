<?php
$db = new PDO("mysql:host=192.168.20.20;dbname=PortfolioProjects", 'root', '');
$db -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$sql = "SELECT `title`, `link`, `image` FROM `projects` WHERE `id` = :id;";
$id = $_GET['id'];
$query = $db->prepare($sql);
$query -> execute([':id'=>$id]);
$project = $query->fetch();
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Edit project form</title>
        <link href="../css/normalize.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="../css/styleAdminPanel.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Welcome to a project editing page, Liliya</h1>

        <form  action="editformdb.php?id=<?php echo $id;?>" method="POST">
            <div class="container">
                <?php
                    echo '<label for="title" > Type a title here:</label >';
                    echo'<input class="addform" type = "text" name = "title" value="'.htmlspecialchars($project['title']).'" >';
                    echo '<label for="link" > insert a project link:</label >';
                    echo '<input class="addform" type = "url" name = "link" value="'.htmlspecialchars($project['link']).'" >';
                    echo '<label for="image" > Choose an image:</label >';
                    echo '<input class="addform" type = "text" name = "image" value="'.htmlspecialchars(substr($project['image'],7)).'">';
                ?>
            </div>
            <input type="submit" value="Edit a project">
        </form>
    </body>
</html>
