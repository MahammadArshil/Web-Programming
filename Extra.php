<?php
if (isset($_POST['submit'])) {
    $n = $_POST['no'];
    $m="";
    $t=$n;
    $s=0;
    while($n!=0)
    {
        $d=$n%10;
        $s=$s+($d*$d*$d);
        $n=$n/10;
    }
    if($s==$t)
    {
        $m="Armstrong";
    }
    else
    {
        $m="Not Armstrong";
    }    
}
?>
<html>
    <body>
        <div>
            <form action="" method="post">
                <table>   
                    <tr>
                        <td><input type="number" name="no" placeholder="Enter Three Digit Number"/></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="submit" value="Check"/>             
                        </td> 
                    </tr> 
                    <tr>
                        <td><input type="text" name="result" value="<?php echo @$m; ?>" disabled></td> 
                    </tr>
                <table>   
           </form>
        </div>
   </body>
</html>