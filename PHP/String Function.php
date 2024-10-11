<html>
<head>
    <title>Practical-36</title>
</head>
<body>
    <form action="Practical-36.php" method="post">
    <input type="text" name="Text"><br><br>
    <input type="submit" name="submit" value="strlen()">
    <input type="submit" name="submit" value="strpos()">
    <input type="submit" name="submit" value="strrev()">
    <input type="submit" name="submit" value="strchr()">
    <input type="submit" name="submit" value="trim()">
    </form>
    <?php
        $text=$_POST['Text'];
        if($_POST['submit']=="strlen()"){
            echo "This method is gives the lenght of String.<br>
                    The length of given String <b>$text</b> is ".strlen($text);
        }
        if($_POST['submit']=="strpos()"){
            echo "This method Returns the position of the first occurrence of a string inside another string.<br>
                    The Occurence of <b>A</b> in given String <b>$text</b> is ".strpos($text,"A");
        }
        if($_POST['submit']=="strrev()"){
            echo "This method is gives the Reverse of String.<br>
                    The Reverse of given String <b>$text</b> is ".strrev($text);
        }
        if($_POST['submit']=="strchr()"){
            echo "This method Finds the first occurrence of a string inside another string.<br>
                    The Occurence of <b>A</b> in given String <b>$text</b> is ".strchr($text,"A");
        }
        if($_POST['submit']=="trim()"){
            echo "This method Removes whitespace or other characters from both sides of a string.<br>
                    The trim of given String <b>$text</b> is ".trim($text);
        }
    ?>
</body>
</html>