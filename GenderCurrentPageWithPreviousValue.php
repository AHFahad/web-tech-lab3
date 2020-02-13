<?php
		if(isset($_POST["submit"]))
		{	
			$gender= $_POST["gender"];
			echo $gender;
		}
		else $gender=" ";

	 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		<fieldset style="width: 100px">
			<legend>GENDER</legend>
			<input type="radio" name="gender" value="male" <?php if ($gender == 'male') echo "checked='checked'"; ?> >Male
			<input type="radio" name="gender" value="Female"<?php if ($gender == 'Female') echo "checked='checked'"; ?> >Female
			<input type="radio" name="gender" value="Other"<?php if($gender=="Other")  echo "checked='checked'" ?> >Other
			

			<hr>
			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>	

</body>
</html>