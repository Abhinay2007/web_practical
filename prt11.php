<!DOCTYPE html>
<html>
<head>
    <title>String Manipulation</title>
</head>
<body>
    <center>
        <h2>PHP String Manipulation</h2>
        <?php
            $str = "Hello Student";
            echo "Original String: " . $str . "<br><br>";

            echo "Length: " . strlen($str) . "<br><br>";

            echo "Reverse: " . strrev($str) . "<br><br>";

            echo "Substring (0,5): " . substr($str, 0, 5) . "<br><br>";

            echo "Uppercase: " . strtoupper($str) . "<br><br>";

            echo "Lowercase: " . strtolower($str) . "<br><br>";

            echo "Word Count: " . str_word_count($str) . "<br><br>";

            echo "Replace 'Student' with 'Friend': " .
            str_replace("Student","Friend",$str);
        ?>
    </center>
</body>
</html>