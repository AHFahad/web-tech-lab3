<?php
		if(isset($_POST["submit"]))
		{	
			$email= $_POST["email"];
			echo $email;
		}
		else $email=" ";

	 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		<fieldset style="width: 100px">
			<legend>EMAIL</legend>
			<input type="email" name="email" value="<?php echo $email ?>">
			<hr>
			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>	

</body>
</html>