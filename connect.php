<?php
$connection = new mysqli("localhost", "root", "", "calendar");
if(!$connection){
    die('No connection: ' . mysqli_connect_error());
}
    
function GetBirthdays($connection){
    $sql = "select * from birthdays ORDER BY month ASC";
    
    $result = mysqli_query($connection, $sql);
    
}