<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		<fieldset style="width: 200px">
			<legend>BLOOD GROUP</legend>
			<SELECT name="bloodGroup">
			<option value="A+">A+</option>
			<option value="B+">B+</option>
			<option value="O+">O+</option>
			<option value="AB+">AB+</option>
			<option value="A-">A-</option>	
             <option value="B-">B-</option>
             <option value="O-">O-</option>
             <option value="AB-">AB-</option>
			</SELECT>
			<hr>
			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>	
	<?php
		if(isset($_POST["submit"])){
					echo $_POST["bloodGroup"];
		}

	 ?>
</body>
</html>