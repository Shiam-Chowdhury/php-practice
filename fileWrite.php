<!DOCTYPE html>
<html>
<body>

<?php
    $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
    $txt = "John Doe\n";
    fwrite($myfile, $txt);
    $txt = "Jane Doe\n";
    fwrite($myfile, $txt);
    fwrite($myfile, $txt);
    $myName = "shiam chowdhury\n";
    fwrite($myfile, $myName);
    fclose($myfile);
?>

</body>
</html>