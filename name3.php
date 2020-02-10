	<?php
		if(isset($_POST["submit"])){
					//$c= $_POST["name"];
				$name= $_POST["name"];
					 echo $name;
					 //$_POST["name"]=$c;

		}
		else $name="";

	 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Name input:</title>
</head>
<body>
	<form method="post">
		<fieldset style="width: 100px">
			<legend>NAME</legend>
			<input type="text" name="name" value="<?php echo $name ?>">
			<hr>
			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>	

</body>
</html>