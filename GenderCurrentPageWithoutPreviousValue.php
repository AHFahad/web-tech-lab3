<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		<fieldset style="width: 100px">
			<legend>GENDER</legend>
			<input type="radio" name="gender" value="Male">Male
			<input type="radio" name="gender" value="Female">Female
			<input type="radio" name="gender" value="Other">Other
			<hr>
			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>	
	<?php
		if(isset($_POST["submit"])){
					echo $_POST["gender"];
		}

	 ?>
</body>
</html>