<?php
require "dbConnect.php";
$db = get_db();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- JQuery for hiding/showing menu items -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="ponder05.css" rel="stylesheet" type="text/css">

	<title>Java 101</title>
</head>

<body>

<h1>HI</h1>

<?php           
$javaFaves = $db->prepare("SELECT * FROM item");
$javaFaves->execute();

// Java Favorites          
while ($row = $javaFaves->fetch(PDO::FETCH_ASSOC))
{
	echo '<strong>' . $row['name'] . '</strong><br>';// . ' ' . $row['twelveozprice'] . ' ' . $row['sixteenozprice'] . ' ' . $row['twentyozprice'];
}
?>


</body>
</html>






