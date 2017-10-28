<?php

$name = $_POST['itemName'];
$twelve = $_POST['twelve'];
$sixteen = $_POST['sixteen'];
$twenty = $_POST['twenty'];
$twentyFour = $_POST['twentyFour'];
$cats = $_POST['radCat'];

require("dbConnect.php");
$db = get_db();
try
{
	$query = 'INSERT INTO item(name, category, twelveOzPrice, sixteenOzPrice, twentyOzPrice, twentyFourOzPrice) VALUES(:name, :cats, :twelve, :sixteen, :twenty, :twentyFour)';
	$statement = $db->prepare($query);
	$statement->bindValue(':name', $name);
	$statement->bindValue(':cats', $cats);
	$statement->bindValue(':twelve', $twelve);
	$statement->bindValue(':sixteen', $sixteen);
	$statement->bindValue(':twenty', $twenty);
	$statement->bindValue(':twentyFour', $twentyFour);
	$statement->execute();
}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}

header("Location: ponder06.php");
die();
?>