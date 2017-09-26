<!DOCTYPE HTML>
<html>  
<body>

<form action="teach03.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>

Major:<br /><!--	
	<input type="radio" name="major" value="Computer Science" id="cs"><label for="cs">Computer Science</label><br />

	<input type="radio" name="major" value="Web Design and Development" id="web"><label for="web">Web Design and Development</label><br />

	<input type="radio" name="major" value="Computer Information Technology" id="cit"><label for="cit">Computer Information Technology</label><br />

	<input type="radio" name="major" value="Computer Engineering" id="ce"><label for="ce">Computer Engineering</label><br />
<br />
	-->
	<?php
		$major = array("Computer Science"=>"cs", "Web Design and Development"=>"web", "Computer Information Technology"=>"cit", "Computer Engineering"=>"ce");

		foreach($major as $x => $x_value){
			?>
			 <input type="radio" name="major" value="<?php echo $x; ?>" id="<?php echo $x_value; ?>"><label for="<?php echo $x_value; ?>"><?php echo $x; ?></label><br />
			 <?php
		}
		?>

<!-- Core Requirement
<br />
	What continents have you been to?<br />
		<input type="checkbox" name="places[]" id="place-na" value="North America"><label for="place-na">North America</label><br />
		<input type="checkbox" name="places[]" id="place-sa" value="South America"><label for="place-sa">South America</label><br />
		<input type="checkbox" name="places[]" id="place-asia" value="Asia"><label for="place-asia">Asia America</label><br />
		<input type="checkbox" name="places[]" id="place-eu" value="Europe"><label for="place-eu">Europe</label><br />
		<input type="checkbox" name="places[]" id="place-af" value="Africa"><label for="place-af">Africa</label><br />
		<input type="checkbox" name="places[]" id="place-aus" value="Australia"><label for="place-aus">Australia</label><br />
		<input type="checkbox" name="places[]" id="place-ant" value="Antarctica"><label for="place-ant">Antarctica</label><br />
-->

<!-- Stretch -->
<br />

	What continents have you been to?<br />
		<input type="checkbox" name="places[]" id="place-na" value="na"><label for="place-na">North America</label><br />
		<input type="checkbox" name="places[]" id="place-sa" value="sa"><label for="place-sa">South America</label><br />
		<input type="checkbox" name="places[]" id="place-asia" value="asia"><label for="place-asia">Asia America</label><br />
		<input type="checkbox" name="places[]" id="place-eu" value="eu"><label for="place-eu">Europe</label><br />
		<input type="checkbox" name="places[]" id="place-af" value="af"><label for="place-af">Africa</label><br />
		<input type="checkbox" name="places[]" id="place-aus" value="aus"><label for="place-aus">Australia</label><br />
		<input type="checkbox" name="places[]" id="place-ant" value="ant"><label for="place-ant">Antarctica</label><br />

<br />


Comments: <input type="text" name="comments"><br>
<input type="submit" name="submit" value="submit">
</form>

</body>
</html>