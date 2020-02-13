<?php
		if(isset($_POST["submit"]))
		{	
			$degree= $_POST["degree"];
			echo $degree;
		}
		else $degree=" ";

	 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		<fieldset style="width: 200px">
			<legend>DEGREE</legend>
			<input type="checkbox" name="degree" value="SSC" <?php if($degree=="SSC") echo"checked='checked'" ?>>SSC
			<input type="checkbox" name="degree" value="HSC"<?php if($degree=="HSC") echo"checked='checked'" ?>>HSC
			<input type="checkbox" name="degree" value="BSc"<?php if($degree=="BSc") echo"checked='checked'" ?>>BSc
			<input type="checkbox" name="degree" value="MSc"<?php if($degree=="MSc") echo"checked='checked'" ?>>MSc
			<hr>
			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>	
	
</body>
</html>