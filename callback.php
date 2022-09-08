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
// $strings = ["apple", "orange", "banana", "coconut"];
// $lengths = array_map( function($item) { return strlen($item); } , $strings);
// print_r($lengths);

function getAge($birthYear){
    return 2022-$birthYear . " ";
}

function getGreetings($name){
    return "Welcome to office " . $name . " ";
}

function printSomething($year, $getWhat){
    echo $getWhat($year);
}

printSomething(1991, "getAge");
printSomething('Shiam', "getGreetings");
?>
</body>
</html>