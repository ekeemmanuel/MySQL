<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Marvel Movies</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<header>
    <h3>Index Page</h3>
</header>
<main>
    <section>
        <h3>Page Menu</h3>
        <?php
            include 'dbConnect.php';
        ?>
            <p><a href="displayAll.php">Display All Movies</a></p>
            <p><a href="displayFox.php">Display Movies created by Marvel Studios</a></p>
            <p><a href="displayCreatedafter.php">Display All Movies created after 2010</a></p>
            <p><a href="displayXmen.php">Display all X-Men Films</a></p>
            <p>For more details click <a href="https://www.google.com/" target="_blank">here</a></p>
    </section>
</main>
</body>
</html>

