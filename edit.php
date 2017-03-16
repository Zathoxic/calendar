<?php

$conn = new mysqli('localhost', 'root', '', 'calendar');

if(!$conn){
    echo "Could not establish connection to database: " . mysqli_error();
}

mysqli_select_db($conn, 'calendar');

$id = $_GET['id'];

$query = "select * from birthdays where id = '$id'";

$result = mysqli_query($conn, $query);

$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="Style.css">
    </head>
    <body>
        <div id="container">
            <h1 style="width: 320px;">Noteer een nieuwe verjaardag!</h1>
            <br/>
            <form method="post" action="update.php" id="form">
                    <input type="hidden" name="id" value="<?php echo $id ?>" >
                    <br>
                    <label for="person" style="float: left;">Name:</label><input name="person" value="<?php echo $row['person'] ?>" style="float: right;">
                    <br>
                    <label for="day" style="float: left;">Day:</label><input name="day" value="<?php echo $row['day'] ?>" style="float: right;">
                    <br>
                    <label for="month" style="float: left;">Month:</label><input name="month" value="<?php echo $row['month'] ?>" style="float: right;">
                    <br>
                    <label for="year" style="float: left;">Year:</label><input name="year" value="<?php echo $row['year'] ?>" style="float: right;">
                    <br>
                    <br>
                    <input class="submit" type="submit" name="submit" value="save">
            </form>
        </div>
    </body>
</html>
