<!DOCTYPE html>
<html lang="en">
<head>
    <title>Practical-25</title>
</head>
<body>
    <?php
        $Integer_var = 786; // Integer
        $Float_var = 1.025; // Float
        $String_var = "Mahammad Arshil"; // String        
        $Boolean_var = true; // Boolean
        $Array_var = array("A", "B", "C","D","E"); // Array
        // Printing the values along with their data types
        echo "Integer_var= " . $Integer_var . " (Type: " . gettype($Integer_var) . ")<br><br>";
        echo "Float_var= " . $Float_var . " (Type: " . gettype($Float_var) . ")<br><br>";
        echo "String_var= " . $String_var . " (Type: " . gettype($String_var) . ")<br><br>";
        echo "Boolean_var= " . ($Boolean_var ? "Yes" : "No") . " (Type: " . gettype($Boolean_var) . ")<br><br>";
        echo "Array_var= ";
        print_r($Array_var);
        echo " (Type: " . gettype($Array_var) . ")\n";
    ?>
</body>
</html>