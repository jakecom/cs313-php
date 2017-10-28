<?php

session_start();

if (isset($_SESSION['username']))
{
	$username = $_SESSION['username'];
}
else
{
	header("Location: signIn.php");
	die();
}

?>

<?php
require "dbConnect.php";
$db = get_db();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!--Hide/Show-->	
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
        $("#extra").click(function(){
        $("#cat4").toggle();
    });
        $("#orders").click(function(){
        $("#ord").toggle();
    });
        $("#ronald").click(function(){
        $("#cat5").toggle();
    });
        $("#hilary").click(function(){
        $("#cat6").toggle();
    });
        $("#take").click(function(){
        $("#cat7").toggle();
    });
});
</script>
<!-- End JQuery -->



<script>
function hideIt(idHide){
var x = document.getElementById(idHide);
	x.style.display = "block";
}

function showIt(idShow){
	var x = document.getElementById(idShow);
	x.style.display = "none";
}
</script>


<script src="ponder06.js"></script>
<link href="ponder06.css" rel="stylesheet" type="text/css">

	<title>Java 101</title>
</head>

<body>
<div id="wrapper">


<h1>Welcome To Java 101, <?= $username ?>!</h1>


<!-- Search for items on the menu -->
<?php
$name = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Search the Menu: <input type="text" name="name">
  <input type="submit" name="submit" value="Search"><br> 
</form>


<?php
if ($name != ""){
	$instance = 0;
		$itemSearch = $db->prepare("SELECT * FROM item WHERE name='$name'");
	$itemSearch->execute();
		while ($row = $itemSearch->fetch(PDO::FETCH_ASSOC))
	{
		$instance = $instance + 1;
	}
		$extrasSearch = $db->prepare("SELECT * FROM extras WHERE name='$name'");
		$extrasSearch->execute();
	while ($row = $extrasSearch->fetch(PDO::FETCH_ASSOC))
	{
		$instance = $instance +1;
	}







	if($instance > 0){
	echo '<table class="table" id="results">';
	
		echo '<thead>
			<tr>
				<th>Item</th>
				<th>12 oz.</th>
				<th>16 oz.</th>
				<th>20 oz.</th>
				<th>24 oz.</th>
			</tr>
		</thead>
		<tbody>';
	

	$itemSearch = $db->prepare("SELECT * FROM item WHERE name='$name'");
	$itemSearch->execute();
	// Java Favorites
	while ($row = $itemSearch->fetch(PDO::FETCH_ASSOC))
	{
		echo '<tr>';
		echo '<th><strong>' . $row['name'] . '</strong></th>' . '<th>' . $row['twelveozprice'] . '</th><th>' . $row['sixteenozprice'] . '</th><th>' . $row['twentyozprice'] . '</th><th>' . $row['twentyfourozprice'] . '</th>';
		echo '</tr>';
	}
		$extrasSearch = $db->prepare("SELECT * FROM extras WHERE name='$name'");
		$extrasSearch->execute();
	while ($row = $extrasSearch->fetch(PDO::FETCH_ASSOC))
	{

		echo '<tr>';
		echo '<th><strong>' . $row['name'] . '</strong></th>' . '<th>' . $row['price'];
	}
	echo '</tbody>';
	echo '</table>';
?>
	<form method="post" action="addDollar.php">  
  <input type="text" name="name" id="name" value="<?php echo $name; ?>" style="display: none;">
  <input type="submit" name="submit" value="Add a Dollar to All Prices"><br> 
</form>
<?php




}else{
	echo 'No Results Found!<br><br><br>';
}
}
?>




<!-- Menu -->
<h2 id="menu">ITEM MENU</h2>
<div id="cats">


<!-- Daily Java Faves -->	
<h2 id=javaFav><a>Daily Java Faves</a></h2>
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
	echo '<th><strong>' . $row['name'] . '</strong></th>' . '<th>' . $row['twelveozprice'] . '</th><th>' . $row['sixteenozprice'] . '</th><th>' . $row['twentyozprice'] . '</th><th>' . $row['twentyfourozprice'] . '</th>';
	echo '</tr>';
}        
?>
</tbody>
</table>
</div>



<!-- Non-Espresso -->
<h2 id=nonFav><a>Non-Espresso Faves</a></h2>
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

// Non Espresso Category       
while ($row = $javaFaves->fetch(PDO::FETCH_ASSOC))
{
	echo '<tr>';
	echo '<th><strong>' . $row['name'] . '</strong></th>' . '<th>' . $row['twelveozprice'] . '</th><th>' . $row['sixteenozprice'] . '</th><th>' . $row['twentyozprice'] . '</th><th>' . $row['twentyfourozprice'] . '</th>';
	echo '</tr>';
}
?>
</tbody>
</table>
</div>



<!-- Frozen Treats -->
<h2 id=treat><a>Frozen Treats</a></h2>
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

// Frozen Treats Category       
while ($row = $javaFaves->fetch(PDO::FETCH_ASSOC))
{
	echo '<tr>';
	echo '<th><strong>' . $row['name'] . '</strong></th>' . '<th>' . $row['twelveozprice'] . '</th><th>' . $row['sixteenozprice'] . '</th><th>' . $row['twentyozprice'] . '</th><th>' . $row['twentyfourozprice'] . '</th>';
	echo '</tr>';
}
?>
</tbody>
</table>
</div>





<h2 id=extra><a>Extras</a></h2>
<div id="cat4">
	<table class="table">
		<thead>
			<tr>
				<th>Item</th>
				<th>Price</th>
			</tr>
		</thead>
		<tbody>
<?php           
$javaFaves = $db->prepare("SELECT name, price FROM extras");
$javaFaves->execute();

// Java Favorites          
while ($row = $javaFaves->fetch(PDO::FETCH_ASSOC))
{
	echo '<tr>';
	echo '<th><strong>' . $row['name'] . '</strong></th>' . '<th>' . $row['price'] . '</th>';
	echo '</tr>';
}
?>
</tbody>
</table>
</div>



</div>


<!-- Insert Item into Database -->

<br><br>
<h2>Insert Item Into Database:</h2>
<form id="mainForm" action="insertItem.php" method="POST">

	<input type="text" id="itemName" name="itemName"></input>
	<label for="itemName">Item Name:</label>
	<br /><br />

	<input type="text" id="twelve" name="twelve"></input>
	<label for="txtChapter">12 oz. Price:</label>
	<br /><br />

	<input type="text" id="sixteen" name="sixteen"></input>
	<label for="sixteen">16 oz. Price</label>
	<br /><br />

	<input type="text" id="twenty" name="twenty"></input>
	<label for="twenty">20 oz. Price</label>
	<br /><br />

	<input type="text" id="twentyFour" name="twentyFour"></input>
	<label for="twentyFour">24 oz. Price</label>
	<br /><br />

	<label>Categories:</label><br />

<?php

try
{

	$statement = $db->prepare('SELECT id, name FROM category');
	$statement->execute();
	while ($row = $statement->fetch(PDO::FETCH_ASSOC))
	{
		$id = $row['id'];
		$name = $row['name'];
		echo "<input type='radio' name='radCat' id='radCat$id' value='$name'>";
		echo "<label for='radCat$id'>$name</label><br />";
		echo "\n";
	}
}
catch (PDOException $ex)
{
	echo "Error connecting to DB. Details: $ex";
	die();
}
?>

	<br />

	<input type="submit" value="Add to Database" />

</form>



<!-- Orders -->
<h2 id="orders">Celebrity Orders</h2>
<div id="ord">


<!-- Ronald Thump -->	
<h2 id=ronald><a>Ronald Thump</a></h2>
<div id="cat5">
	<table class="table">
		<thead>
			<tr>
				<th>Order Number</th>
				<th>Customer Name</th>
				<th>Item</th>
				<th>Order Date</th>
			</tr>
		</thead>
		<tbody>
<?php           
$javaOrders = $db->prepare("SELECT * FROM Orders INNER JOIN Customers ON Orders.CustomerID=Customers.CustomerID WHERE Customers.CustomerID=1");
$javaOrders->execute();


while ($row = $javaOrders->fetch(PDO::FETCH_ASSOC))
{
	echo '<tr>';
	echo '<th><strong>' . $row['orderid'] . '</strong></th>' . '<th>' . $row['customername'] . '</th><th>' . $row['name'] . '</th><th>' . $row['orderdate'] . '</th>';
	echo '</tr>';
}        
?>
</tbody>
</table>
</div>



<!-- Hilarious Clinton -->	
<h2 id=hilary><a>Hilarious Clinton</a></h2>
<div id="cat6">
	<table class="table">
		<thead>
			<tr>
				<th>Order Number</th>
				<th>Customer Name</th>
				<th>Item</th>
				<th>Order Date</th>
			</tr>
		</thead>
		<tbody>
<?php           
$javaOrders = $db->prepare("SELECT * FROM Orders INNER JOIN Customers ON Orders.CustomerID=Customers.CustomerID WHERE Customers.CustomerID=2");
$javaOrders->execute();


while ($row = $javaOrders->fetch(PDO::FETCH_ASSOC))
{
	echo '<tr>';
	echo '<th><strong>' . $row['orderid'] . '</strong></th>' . '<th>' . $row['customername'] . '</th><th>' . $row['name'] . '</th><th>' . $row['orderdate'] . '</th>';
	echo '</tr>';
}        
?>
</tbody>
</table>
</div>



<!-- Ateyourham -->	
<h2 id=take><a>Takeyourham Blinkin</a></h2>
<div id="cat7">
	<table class="table">
		<thead>
			<tr>
				<th>Order Number</th>
				<th>Customer Name</th>
				<th>Item</th>
				<th>Order Date</th>
			</tr>
		</thead>
		<tbody>
<?php           
$javaOrders = $db->prepare("SELECT * FROM Orders INNER JOIN Customers ON Orders.CustomerID=Customers.CustomerID WHERE Customers.CustomerID=3");
$javaOrders->execute();


while ($row = $javaOrders->fetch(PDO::FETCH_ASSOC))
{
	echo '<tr>';
	echo '<th><strong>' . $row['orderid'] . '</strong></th>' . '<th>' . $row['customername'] . '</th><th>' . $row['name'] . '</th><th>' . $row['orderdate'] . '</th>';
	echo '</tr>';
}        
?>
</tbody>
</table>
</div>



</div>



<br>
<h2><a href="signOut.php">Sign Out</a><h2>







</div>
</body>
</html>