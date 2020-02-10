
<!DOCTYPE html>
<html>
<head>
	<title>Name input:</title>
</head>
<body>
	<form method="post">
		<fieldset style="width: 100px">
			<legend>NAME</legend>
			<input type="text" name="name">
			<hr>
			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>	
	<?php
		if(isset($_POST["submit"])){
					echo $_POST["name"];
		}

	 ?>
</body>
</html>