<!DOCTYPE html>
<html>
<body>

<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l") . "<br>";
?>

&copy; 2010-<?php echo date("Y");?>

<?php echo "The time is " . date("h:i:sa"); ?>

</body>
</html>
