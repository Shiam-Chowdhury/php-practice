<?php

// $a1=array("red","green","blue","yellow");
// $a2=array("red","green","blue");

// $result=array_intersect_key($a1,$a2);
// print_r($result);

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("c"=>"yellow","d"=>"black","e"=>"brown");
$a3=array("f"=>"green","c"=>"purple","g"=>"red");

$result=array_intersect_key($a1,$a2,$a3);
print_r($result);
?>