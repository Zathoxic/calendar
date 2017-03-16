<?php
$conn = new mysqli("localhost", "root", "", "calendar");
if(!$conn){
    die('No connection: ' . mysqli_connect_error());
}

function GetBirthdays($conn){
    $query = "select * from birthdays ORDER BY month ASC";

    $result = mysqli_query($conn, $query);

}
