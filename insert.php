<?php
require('connect.php');

var_dump($_POST);

$person = $_POST['person'];
$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];

$monthPrefix = 0;

if(strlen($month) < 2 && strlen($month) > 0){
    $month = $monthPrefix . $month;
}

$query = "INSERT INTO birthdays (person, day, month, year) VALUES ('$person', '$day', '$month', '$year')";

var_dump($query);

if (!mysqli_query($conn, $query)){
    echo("Error description: " . mysqli_error($conn));
}


header('Location: ./');
