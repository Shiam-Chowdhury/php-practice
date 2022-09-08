<!DOCTYPE html>
<html>
<body>

<?php
// echo readfile("webdictionary.txt");

$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");

// echo fread($myfile,filesize("webdictionary.txt"));
// echo fgets($myfile); //to read one line

// while(!feof($myfile)){ //loop until reaching the end of file
//     echo fgets($myfile). "<br>";
// }

// Output one character until end-of-file
while(!feof($myfile)) {
    echo fgetc($myfile). "<br>";
  }

fclose($myfile);

?>

</body>
</html>