<?php
		if(isset($_POST["submit"]))
		{	
			$b= $_POST["bloodGroup"];
			echo $b;
		}
		else $b=" ";

	
	 ?>	
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		<fieldset style="width: 200px">
			<legend>BLOOD GROUP</legend>
			<SELECT name="bloodGroup" >
			<option value="A+" <?php if($b=="A+") echo "selected" ?>>A+</option>
			<option value="B+"<?php if($b=="B+") echo "selected" ?>>B+</option>
			<option value="O+" <?php if($b=="O+") echo "selected" ?>>O+</option>
			<option value="AB+" <?php if($b=="AB+") echo "selected" ?>>AB+</option>
			<option value="A-" <?php if($b=="A-") echo "selected" ?>>A-</option>	
             <option value="B-" <?php if($b=="B-") echo "selected" ?>>B-</option>
             <option value="O-" <?php if($b=="O-") echo "selected" ?>>O-</option>
             <option value="AB-" <?php if($b=="AB-") echo "selected" ?>>AB-</option>
			</SELECT>
			<hr>
			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>


	
</body>
</html>