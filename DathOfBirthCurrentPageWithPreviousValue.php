<?php
		if(isset($_POST["submit"]))
		{	
					echo $_POST["dd"]." ";
					echo $_POST["mm"]." ";
					echo $_POST["yyyy"]." ";
		}
		else $name=" ";

	 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		<fieldset style="width: 100px">
			<legend>DATH OF BIRTH</legend>
			<table>
				<tr>
					<td>dd</td><td></td><td>mm</td><td></td><td>yyyy</td>
				</tr>
				<tr>
					<td><input type="tel" maxlength="2" name="dd" style="width: 40px" value="<?php echo $_POST["dd"] ?>"></td>
					<td>/</td>
					<td><input type="tel" maxlength="2" name="mm" style="width: 40px" value="<?php echo $_POST["mm"] ?>"></td>
					<td>/</td>
					<td><input type="tel" maxlength="4" name="yyyy" style="width: 40px" value="<?php echo $_POST["yyyy"] ?>"></td>
				</tr>
			</table>
			<hr>
			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>	

</body>
</html>