<?php
// Die gestartete Session wird �bertragen somit k�nnen die Variablen �bertragen werden. 
session_start();
// Hier wird die Session beendet. Somit wird das Logout gemacht und man kehrt wieder zur Login Page zur�ck
if (array_key_exists("logout", $_POST)) {
	session_destroy();
	header("Location: /login.php");
	return;
}
