<?php
require ('connect.php');

$id = $_POST['id'];
$person = $_POST['person'];
$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];

$monthPrefix = 0;

if(strlen($month) < 2 && strlen($month) > 0){
    $month = $monthPrefix . $month;
}

$query = "UPDATE birthdays SET person='$person', day='$day', month='$month', year='$year' WHERE id=$id";

if (!mysqli_query($conn, $query)){
    echo("Error description: " . mysqli_error($conn));
}


header('Location: index.php');
