<?php

session_start();
session_regenerate_id()

	if(isses($_SESSION['Auth']) && $_SESSION['Auth']==1) {
		header('location: portal.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"
	<title>Internation Business School</title>
	<link rel="stylesheet" href="styles.css">

</head>
<body>

	<h1> Anmeldung </h1>

	<from action="login_server.php" method="post">
		Benutzer: <input name="frmUser" type="text"><br>
		Kennwort: <input name="frmPass" type="text"><br>
		<input name="Login" type="submit"><br>
		
	
</body>
</html>
