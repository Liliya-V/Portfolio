<?php
$db = new PDO("mysql:host=192.168.20.20;dbname=PortfolioProjects", 'root', '');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Add a project form</title>
        <link href="../css/normalize.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="../css/styleAdminPanel.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Welcome to a project adding page, Liliya</h1>
        <form  action="addformDB.php" method="POST">
            <div class="container">
               <label>Type a title here:</label>
               <input class="addform" type="text" name="title" required>
               <label>insert a project link:</label>
               <input class="addform" type="url" name="link" required>
               <label>Choose an image:</label>
               <input class="addform" type="file" name="image" required>
            </div>
            <input type="submit" value="Add a project">
        </form>
    </body>
</html>