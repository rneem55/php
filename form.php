<form action = "form.php" method = "GET">
Name: <input type = "text" name="fname">
<br>
Last: <input type = "text" name="lname">
<input type="submit">
</form>

<?php 
echo $_GET["fname"];
echo $_GET["lname"]
?>