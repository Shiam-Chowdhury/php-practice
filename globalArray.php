<!DOCTYPE html>
<html>
<body>

<?php
    $var1 = 50;
    $var2 = 100;

    function newFun(){
        //Global array stores all global variables
        $GLOBALS['var1'] = $GLOBALS['var1'] + $GLOBALS['var2'];
    }

    newFun();

    echo "<P>Price is $var1 outside</p>";

?>

</body>
</html>