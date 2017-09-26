<?php

$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$major = htmlspecialchars($_POST["major"]);
$comments = htmlspecialchars($_POST["comments"]);
$places = $_POST["places"];
?>

<!DOCTYPE html>
<html>
<body>

<p>Welcome <?=$name ?></p><br>
<p>Your email address is: <?=$email ?></p><br>
<p>Your Major is: <?=$major ?></p><br>
<p>These are your comments: <?=$comments ?></p><br>

<p>These are the continents you've visited:</p>

	<ul>

<?php

 //This is for the core requirement
//foreach ($places as $place)
//{
//	$place_ = htmlspecialchars($place);
//	echo "<li><p>$place_</p></li>";
//}
?>

<!-- I believe this is what is wanted for the stretch challenge
	Create a map with a key for each continent value-->
<?php
	$dict = array("na"=>"North America", "sa"=>"South America", "asia"=>"Asia", "eu"=>"Europe", "af"=>"Africa", "aus"=>"Australia", "ant"=>"Antarctica");
?>

<p>These are the continents you've visited:</p>

<?php
foreach ($places as $place)
{
	$place_ = htmlspecialchars($place);
	echo "<li><p>$dict[$place_]</p></li>";}

?>		

</ul>


</body>
</html> 