<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite tree is " . $_SESSION["favtree"] . ".";

?>

<?php
print_r($_SESSION);
?>

</body>
</html>