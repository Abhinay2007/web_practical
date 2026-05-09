<!DOCTYPE html>
<html>
<head>
    <title>POST Method Example</title>
</head>
<body>
    <center>
        <h2>Student Form</h2>
        <form method="post">
            Name:<br>
            <input type="text" name="name"><br><br>
            Email:<br>
            <input type="text" name="email"><br><br>
            <input type="submit" value="Submit">
        </form>
        <br>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                $name = $_POST["name"];
                $email = $_POST["email"];
                echo "<h3>Entered Details:</h3>";
                echo "Name: " . $name . "<br>";
                echo "Email: " . $email;
            }
        ?>
    </center>
</body>
</html>