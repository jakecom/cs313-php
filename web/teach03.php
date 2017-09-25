<?php

$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$major = htmlspecialchars($_POST["major"]);
$comments = htmlspecialchars($_POST["comments"]);


?>

<!DOCTYPE html>
<html>
<body>

<p>Welcome <?=$name ?></p><br>
<p>Your email address is: <?=$email ?></p><br>
<p>Your Major is: <?=$major ?></p><br>
<p>These are your comments: <?=$comments ?></p><br>
<p>These are the countries you've visited:</p>


</body>
</html> 