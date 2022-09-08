<html>
<body>

<form action="phpForm.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

<form action="phpForm.php" method="get">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

</br>

Welcome <?php echo $_POST["name"]; //for post ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

</br>

Welcome <?php echo $_GET["name"]; //for get ?><br>
Your email address is: <?php echo $_GET["email"]; ?>

</body>
</html>