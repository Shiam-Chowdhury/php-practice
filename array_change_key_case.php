<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
print_r(array_change_key_case($age,CASE_UPPER));
echo "<br>";
$age=array("HALO"=>"35","VALO"=>"37","BOLO"=>"43");
print_r(array_change_key_case($age,CASE_LOWER));
echo "<br>";
$phone = array("xiaomi"=>"redmi", "xiaomi" => "mi", "nokia" => "express");
print_r(array_change_key_case($phone, CASE_UPPER));

?>
</body>
</html>