<?php
$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");

$c=array_combine($fname,$age);
print_r($c);
echo "<br>";

$name = array("shiam", "nashid", "navid");
$school = array("bzs", "karotoa", "aviation");

print_r(array_combine($name, $school));
?>