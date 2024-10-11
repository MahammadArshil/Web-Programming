<html>
<head>
    <title>Practical-22</title>
</head>
<body>
    <?php
        //Single Dimension Array
        $array1 = array("A","B");
        echo "One Dimension Array <br>";
        print_r($array1);
        echo "<br>";
        echo "First Element of Array1 is :".$array1[0]."<br>";
        //Two Dimension Array
        $array2 = array( array("A","B","C") , array("D","E","F") );
        echo "Two Dimension Array <br>";
        print_r($array2);
        echo "<br>";
        echo "Element of Array2[1][2] :".$array2[1][2]."<br>";
        //Multi Dimension Array
        $array3 = array( array(array(1,2,3)), array(array(7,8,9)) );
        echo "Multi Dimension Array <br>";
        print_r($array3);
        echo "<br>";
        echo "Element of Array3[1][0][2] :".$array3[1][0][2];
    ?>
</body>
</html>