<?php

include 'connect.php';

$months = ['onbekend','januari','februari','maart','april','mei','juni','juli','augustus','september', 'oktober', 'november', 'december'];

?>

    <html>

    <head>
        <title>Verjaardagskalender</title>
        <link href="Style.css" rel="stylesheet" type="text/css">
    </head>

    <body cz-shortcut-listen="true">
        <?php
        $birthdays = $connection;
        $sql = "SELECT * FROM birthdays ORDER BY month, day"; 
        if (!$result = $connection->query($sql)) { 
            echo("Error description: " . mysqli_error($connection)); 
        } 
        
        while($row = mysqli_fetch_assoc($result)){
            $id = $row["id"];
            $person = $row["person"];
            $day = $row["day"];
            $month = $row["month"];
            $year = $row["year"];

            $birthdays = $result->fetch_all(MYSQLI_ASSOC); 
            $lastMonth = ''; 
            $lastDay = -1; 
            $id = $_GET['id'];

            if($lastMonth == $month){
                $month = "";
            }else{
                $month = $months[$month];
            }

            $lastMonth = $month;

            foreach($birthdays as $birthday){ 
                if ($birthday['month'] != $lastMonth) { 
                    echo '<h1>';
                    echo $months[$birthday['month']]; 
                    echo '</h1>'; 
                    echo '<p><a href="edit.php?id='$id'">';
                    echo '';
                    echo '</a></p>';
                } 

                if ($birthday['day'] != $lastDay) { 
                    echo '<h2>' . $birthday['day'] . '</h2>'; 
                } 
            }
            
        }