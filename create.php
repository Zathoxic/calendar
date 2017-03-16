<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="Style.css">
    </head>
    <body>
        <div id="container">
            <h1 style="width: 320px;">Noteer een nieuwe verjaardag!</h1>
            <br/>
            <form method="post" action="insert.php" id="form">
                    <label for="person" style="float: left;">Name:</label><input name="person" style="float: right;">
                    <br>
                    <label for="day" style="float: left;">Day:</label><input name="day" style="float: right;">
                    <br>
                    <label for="month" style="float: left;">Month:</label><input name="month" style="float: right;">
                    <br>
                    <label for="year" style="float: left;">Year:</label><input name="year" style="float: right;">
                    <br>
                    <br>
                    <input class="submit" type="submit" name="submit" value="save">
            </form>
        </div>
    </body>
</html>
