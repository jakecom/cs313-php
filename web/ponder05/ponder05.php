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
<script>
$(document).ready(function(){
    $("#menu").click(function(){
        $("#cats").toggle();
    });
    $("#javaFav").click(function(){
        $("#cat1").toggle();
    });
        $("#nonFav").click(function(){
        $("#cat2").toggle();
    });
        $("#treat").click(function(){
        $("#cat3").toggle();
    });
});
</script>
<!-- End JQuery -->

<link href="ponder05.css" rel="stylesheet" type="text/css">

	<title>Java 101</title>
</head>

<body>
<div id="wrapper">

<h1>Welcome To Java 101</h1>


<h2 id="menu">ITEM MENU</h2>
<div id="cats">


	
<h2 id=javaFav>Daily Java Faves</h2>
<div id="cat1">
	<table class="table">
		<thead>
			<tr>
				<th>Item</th>
				<th>12 oz.</th>
				<th>16 oz.</th>
				<th>20 oz.</th>
				<th>24 oz.</th>
			</tr>
		</thead>
		<tbody>
<?php           
$javaFaves = $db->prepare("SELECT name, category, twelveozprice, sixteenozprice, twentyozprice, twentyfourozprice FROM item WHERE category='Daily Java Faves'");
$javaFaves->execute();

// Java Favorites
while ($row = $javaFaves->fetch(PDO::FETCH_ASSOC))
{
	echo '<tr>';
	echo '<th><strong>' . $row['name'] . '</strong></th>' . ' <th>' . $row['twelveozprice'] . '</th> <th>' . $row['sixteenozprice'] . '</th> <th>' . $row['twentyozprice'] . '</th> <th>' . $row['twentyfourozprice'] . '</th>';
	echo '</tr>';
}        
?>
</tbody>
</table>
</div>



<h2 id=nonFav>Non-Espresso Faves</h2>
<div id="cat2">
	<table class="table">
		<thead>
			<tr>
				<th>Item</th>
				<th>12 oz.</th>
				<th>16 oz.</th>
				<th>20 oz.</th>
				<th>24 oz.</th>
			</tr>
		</thead>
		<tbody>
<?php           
$javaFaves = $db->prepare("SELECT name, category, twelveozprice, sixteenozprice, twentyozprice, twentyfourozprice FROM item WHERE category='Non-Espresso Faves'");
$javaFaves->execute();

// Java Favorites          
while ($row = $javaFaves->fetch(PDO::FETCH_ASSOC))
{
	echo '<tr>';
	echo '<th><strong>' . $row['name'] . '</strong></th>' . ' <th>' . $row['twelveozprice'] . '</th> <th>' . $row['sixteenozprice'] . '</th> <th>' . $row['twentyozprice'] . '</th> <th>' . $row['twentyfourozprice'] . '</th>';
	echo '</tr>';
}
?>
</tbody>
</table>
</div>




<h2 id=treat>Frozen Treats</h2>
<div id="cat3">
	<table class="table">
		<thead>
			<tr>
				<th>Item</th>
				<th>12 oz.</th>
				<th>16 oz.</th>
				<th>20 oz.</th>
				<th>24 oz.</th>
			</tr>
		</thead>
		<tbody>
<?php           
$javaFaves = $db->prepare("SELECT name, category, twelveozprice, sixteenozprice, twentyozprice, twentyfourozprice FROM item WHERE category='Frozen Treats'");
$javaFaves->execute();

// Java Favorites          
while ($row = $javaFaves->fetch(PDO::FETCH_ASSOC))
{
	echo '<tr>';
	echo '<th><strong>' . $row['name'] . '</strong></th>' . ' <th>' . $row['twelveozprice'] . '</th> <th>' . $row['sixteenozprice'] . '</th> <th>' . $row['twentyozprice'] . '</th> <th>' . $row['twentyfourozprice'] . '</th>';
	echo '</tr>';
}
?>
</tbody>
</table>
</div>





</div>





</div>
</body>
</html>