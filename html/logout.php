<?php
// Die gestartete Session wird übertragen somit können die Variablen übertragen werden. 
session_start();
// Hier wird die Session beendet. Somit wird das Logout gemacht und man kehrt wieder zur Login Page zurück
if (array_key_exists("logout", $_POST)) {
	session_destroy();
	header("Location: /login.php");
	return;
}
