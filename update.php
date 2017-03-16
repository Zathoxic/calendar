<?php
require ('connect.php');

$id = $_POST['id'];
$person = $_POST['person'];
$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];

$query = "UPDATE birthdays SET person='$person', day='$day', month='$month', year='$year' WHERE id=$id";

if (!mysqli_query($conn, $query)){
    echo("Error description: " . mysqli_error($conn));
}


header('Location: index.php');
