<?php

$name = $_POST['name'];


require("dbConnect.php");
$db = get_db();
try
{
	$query = "UPDATE item SET twelveozprice = twelveozprice + (CAST(1.00 AS money)), sixteenozprice = sixteenozprice + (CAST(1.00 AS money)), twentyozprice = twentyozprice + (CAST(1.00 AS money)), twentyfourozprice = twentyfourozprice + (CAST(1.00 AS money)) WHERE name='$name'";
	$statement = $db->prepare($query);
	//$statement->bindValue(':name', $name);
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