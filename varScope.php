<!DOCTYPE html>
<html>
<body>

<?php
    $var1 = 50;
    $var2 = 100;

    function newFun(){
        //global keyword to access the global variables
        global $var1;
        echo "<P>Price is $var1 h</p>";
    }

    newFun();

    echo "<P>Price is $var1 outside</p>";

?>

</body>
</html>