<?php
// $a=array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");
// print_r(array_keys($a));

// $a=array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");
// print_r(array_keys($a,"Highlander"));

// $a=array(10,20,30,"10");
// print_r(array_keys($a,"10",false));

$a=array(10,20,30,"10");
print_r(array_keys($a,"10",true));
?>