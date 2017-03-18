<?php
include("connection.php"); //Establishing connection with our database
if (empty($_POST ["username"]) || empty($_POST["password"])) {
    echo "Both fields are required.";
} else {
    $username = $_POST['username'];
    $password = $_POST['password'];
    //SQL query
    $sql = "SELECT uid FROM users WHERE username='$username' and password='$password'";
    //Set up a variable, result, to hold the result of the query
    $result=mysqli_query($db,$sql);
    //Confirm that the number of rows is 1
    if (mysqli_num_rows($result)== 1){
        header ("location: home.php"); //Redirecting to another page
    }
    else
    {
        echo "Incorrect username or password";
    }
}
?>