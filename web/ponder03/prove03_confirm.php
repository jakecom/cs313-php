<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title> Shopaholics Anonymous</title>
  <link href="prove03.css" rel="stylesheet" type="text/css">
</head>

<body>
  <div id="wrapper">
  <h1> Shopaholics Anonymous</h1>

<?php
echo "Thank you for your business! <br>";
echo "Order #" . rand(0, 500) . "<br><br><br><h3>Your Order:</h3>";
 ?>

<?php
session_start();
    if (isset($_POST['item1'])) {
        $_SESSION['item1'] = $_POST['item1'];
    }
    if (isset($_POST['item2'])) {
        $_SESSION['item2'] = $_POST['item2'];
    }
    if (isset($_POST['item3'])) {
        $_SESSION['item3'] = $_POST['item3'];
    }

function filtration($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$address = filtration($_POST['address']);
$city    = filtration($_POST['city']);
$state   = filtration($_POST['state']);
$item1   = $_SESSION['item1'];
$item2   = $_SESSION['item2'];
$item3   = $_SESSION['item3'];

$_SESSION['address'] = $address;
$_SESSION['city']    = $city;
$_SESSION['state']   = $state;
$_SESSION['zip']     = $zip;

if ($item1 != ""){
echo $_SESSION['item1'];
}else{
    echo "0";
}
echo " Pocket Monsters" . "<br>";

if ($item2 != ""){
echo $_SESSION['item2'];
}else{
    echo "0";
}
echo " Ugly Mice" . "<br>";

if ($item3 != ""){
echo $_SESSION['item3'];
}else{
    echo"0";
}
echo " Beyonce Diamond Rings" . "<br>";

echo "<p> Shipping Address: </p>";

if (preg_match("/^[a-zA-Z0-9 ]+$/", $_POST['address'])) {
    $address = $_POST['address'];
    echo $address . "<br>";
} else {
    echo "your address was invalid <br>";
}


if (preg_match("/^[a-zA-Z ]+$/", $_POST['city'])) {
    $city = $_POST['city'];
    echo $city . "<br>";
} else {
    echo "your city was invalid <br>";
}


if (preg_match("/^[a-zA-Z]+$/", $_POST['state'])) {
    $state = $_POST['state'];
    echo $state . "<br>";
} else {
    echo "your state was invalid <br>";
}


if (preg_match('^\d{5}$^', $_POST['zip'])) {
    $zip = $_POST['zip'];
    echo $zip . "<br>";
} else {
    echo "your zip code was invalid <br>";
}

echo "<br>";
?>

</form>
</div>
</body>
</html>