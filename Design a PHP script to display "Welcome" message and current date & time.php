<!DOCTYPE html>
<html>
    <head>
        <title>Welcome Program</title>
    </head>
    <body>
        <center>
            <h2>
                <?php
                    echo "Welcome";
                ?>
            </h2>
            <p>
                <?php
                    date_default_timezone_set("Asia/Kolkata");
                    echo "Current Date and Time: " . date("d-m-Y h:i:s A");
                ?>
            </p>
        </center>
    </body>
</html>