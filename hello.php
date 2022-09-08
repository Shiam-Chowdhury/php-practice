<!DOCTYPE html>
<html>
<body>

<?php
    $var1 = 50;

    function newFun(){
        echo "<P>Price is $var1 h</p>"; //error
    }

    newFun();

    echo "<P>Price is $var1 outside</p>";

    // Cast float to int
    $x = 23465.768;
    $int_cast = (int)$x;
    echo $int_cast;

    echo "<br>";

    // Cast string to int
    $x = "23465.768";
    $int_cast = (int)$x;
    echo $int_cast;
    echo "<br>";

    //constant declaration 
    define('myName', 'Shiam Chowdhury');
    $myName = 'hello';
    echo myName;
    echo "<br>";

    //constant array
    define('gadgets', [
        'phone', 'tab', 'pc'
    ]);
    echo gadgets[0];

?>

</body>
</html>