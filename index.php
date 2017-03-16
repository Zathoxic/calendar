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
        $birthdays = $conn;
        $sql = "SELECT * FROM birthdays ORDER BY month, day";
        if (!$result = $conn->query($sql)) {
            echo("Error description: " . mysqli_error($conn));
        }

        while($row = mysqli_fetch_assoc($result)){
            $birthdays = $result->fetch_all(MYSQLI_ASSOC);
            $lastMonth = '';
            $lastDay = '';


            foreach ($birthdays as $birthday){
                if($birthday['month'] != $lastMonth){
                    printf(PHP_EOL . '<h1>' . $months[$birthday['month']] . '</h1>' . PHP_EOL . '<hr/>');
                }

                if($birthday['day'] != $lastDay){
                    echo '<h2>' . $birthday['day'] . '</h2>';
                }

                printf('<p><a href="edit.php?id=' . $birthday['id'] . '">' . $birthday['person'] . ' (' . $birthday['year'] . ')</a> <a href="delete.php?id=' . $birthday['id'] . '">x</a></p>' . PHP_EOL);

                $lastMonth = $birthday['month'];
                $lastDay = $birthday['day'];
            }
            echo '<p style="text-align: center;"><a class="add" href="create.php" > + Verjaardag toevoegen + </a></p>';
        }
