<?php

session_start();

if (array_key_exists("logout", $_POST)) {
	session_destroy();
	header("Location: /login.php");
	return;
}
