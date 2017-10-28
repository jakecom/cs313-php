<?php

session_start();
$badLogin = false;

if (isset($_POST['txtUser']) && isset($_POST['txtPassword']))
{

	$username = $_POST['txtUser'];
	$password = $_POST['txtPassword'];
	
	require("dbConnect.php");
	$db = get_db();
	$query = 'SELECT password FROM login WHERE username=:username';
	$statement = $db->prepare($query);
	$statement->bindValue(':username', $username);
	$result = $statement->execute();
	if ($result)
	{
		$row = $statement->fetch();
		$hashedPasswordFromDB = $row['password'];

		if (password_verify($password, $hashedPasswordFromDB))
		{

			$_SESSION['username'] = $username;
			header("Location: ponder06.php");
			die(); 
		}
		else
		{
			$badLogin = true;
		}
	}
	else
	{
		$badLogin = true;
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<link href="ponder06.css" rel="stylesheet" type="text/css">

	<title>Sign In</title>
</head>

<body>
<div id="wrapper">

<?php
if ($badLogin)
{
	echo "Username or Password Invalid<br /><br />\n";
}
?>

<h1>Sign in below:</h1>

<form id="mainForm" action="signIn.php" method="POST">

	<label for="txtUser">Username</label>
	<input type="text" id="txtUser" name="txtUser" placeholder="Username">
	<br /><br />

	<label for="txtPassword">Password</label>
	<input type="password" id="txtPassword" name="txtPassword" placeholder="Password">
	<br /><br />

	<input type="submit" value="Sign In" />

</form>

<br /><br />
<a href="signUp.php">Sign up</a> for a new account.
<br><br>Or go back to the <a href="opening.php">Homepage</a>

</div>

</body>
</html>