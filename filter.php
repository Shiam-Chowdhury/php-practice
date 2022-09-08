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
    // $str = "<h1>Hello World!</h1>";
    // $newstr = filter_var($str, FILTER_SANITIZE_STRING);
    // echo $newstr;

    $url = "https://www.w3schools.com?a=10";

    if(!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
        echo("$url is a valid URL with a query string");
    }else {
        echo("$url is not a valid URL with a query string");
    }
?>
</body>
</html>