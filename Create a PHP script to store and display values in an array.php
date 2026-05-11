<!DOCTYPE html>
<html>
<head>
    <title>User Input Array</title>
</head>
<body>
    <center>
        <h2>Display Array Elements</h2>
        <form method="post">
        Enter values (comma separated):<br>
        <input type="text" name="values"><br><br>
        <input type="submit" value="Submit">
        </form>
        <br>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                $input = $_POST["values"];
            
                $arr = explode(",", $input);
    
                echo "<b>Array Elements:</b><br>";
                foreach($arr as $value)
                {
                    echo $value . "<br>";
                }
            }
        ?>
    </center>
</body>
</html>