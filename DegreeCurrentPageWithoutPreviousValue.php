<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		<fieldset style="width: 200px">
			<legend>DEGREE</legend>
			<input type="checkbox" name="degree" value="SSC">SSC
			<input type="checkbox" name="degree" value="HSC">HSC
			<input type="checkbox" name="degree" value="BSc">BSc
			<input type="checkbox" name="degree" value="MSc">MSc
			<hr>
			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>	
	<?php
		if(isset($_POST["submit"])){
					echo $_POST["degree"];
		}

	 ?>
</body>
</html>