<html>
<head>
    <title>Practical-35</title>
</head>
<body>
    <?php
        //For Global Variables...
        echo "<p>Example of Global Variable in PHP.</p>";
        $G = 5; // global scope
        function myGlobal() {
            // using x inside this function will generate an error
            echo "<p>Variable G inside function is: $G</p>";
        }
        myGlobal();
        echo "<p>Variable G outside function is: $G</p>";

        //For Local Variables...
        echo "<p>Example of Local Variable in PHP.</p>";
        function myLocal() {
            $L = 5; // local scope
            echo "<p>Variable L inside function is: $L</p>";
        }
        myLocal();
        // using x outside the function will generate an error
        echo "<p>Variable L outside function is: $L</p>";

        //For Static variables...
        echo "<p>Example of Static Variable in PHP.</p>";
        function myStatic() {
            static $x = 0;
            echo $x;
            $x++;
        }
        myStatic();
        myStatic();
        myStatic();
    ?>
</body>
</html>