


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> 
Name: <input type="text" name="name" value="<?php echo $name;?>">
<input type="submit" name="submit" value="Submit">
</form>
<?php
echo $_POST["name"];

?>
