<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		<fieldset style="width: 100px">
			<legend>EMAIL</legend>
			<input type="eamil" name="email">
			<hr>
			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>	
	<?php
		if(isset($_POST["submit"])){
					echo $_POST["email"];
		}

	 ?>
</body>
</html>