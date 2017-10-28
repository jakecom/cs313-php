<!DOCTYPE html>
<html>
<head>
		<link href="ponder06.css" rel="stylesheet" type="text/css">
		<script src="confirm.js"></script>
	<title>Sign Up</title>
</head>

<body>

<div id="wrapper">

<h1>Create your new Java 101 account</h1>

<form id="mainForm" onsubmit="return confirm()"" action="createAccount.php" method="POST">

	<label for="txtUser">Username</label>
	<input type="text" id="txtUser" name="txtUser" placeholder="Username">
	<br><br>

	<label for="txtPassword">Password</label>
	<input type="password" id="txtPassword" name="txtPassword" placeholder="Password"></input>

	<label for="confPassword">Confirm Password</label>
	<input type="password" id="confPassword" name="confPassword" placeholder="Password"></input>
	
	<br><br>

	<input type="submit" value="Create Account"/>

	</form>

	<p>Passwords must match and be at least 7 characters in length, and contain at least one number</p>
	</div>
	</body>
	</html>	