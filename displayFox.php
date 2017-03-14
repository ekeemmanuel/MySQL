<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Marvel Movies</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<header>
    <h1>Movies By 20th Century Fox</h1>
<?php
//link to your database
include 'dbConnect.php';
//create a SQL query as a string
$sql_query = "SELECT * FROM marvelmovies WHERE productionStudio='20th Century Fox'; ";
//execute the SQL query
$result = $link->query($sql_query);
//iterate over $result object $row at a time
//use fetch_array() to return an associative array
while ($row = $result->fetch_array()) {
    //process the flow
    // print out fields from row of data
    echo "<p>" . $row ['marvelMovieID'] . " - " . $row ['title'] . " - " . $row ['productionStudio'] . "</p>";

}
$result->close();
$link->close();
?>
    <p>Click to return to <a href="index.php">Homepage</a></p>
</body>
</html>