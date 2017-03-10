<?php
$host = "localhost"; 
$username = "root"; 
$password = ""; 
$db = "calendar"; 

//Create database connection
$connection = new mysqli($host, $username, $password, $db);

//Check conneciton
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} 

//Get id of the selected user
$id = $_GET['id'];

//Delete the user from the database
$sql = "DELETE FROM birthdays WHERE id = $id";

// execute delete instruction
$connection->query($sql);