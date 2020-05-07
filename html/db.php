<?php
// Hier wird das Einloggen der Datenbank ermöglicht
$db = new mysqli("127.0.0.1", "root", "", "login");
// Falls dies nicht funktionieren sollte (durch Fehler), dann wird es einen Fehler ausgeben. 
if ($db->connect_errno) {
	die('Fehler beim Verbinden mit der Datenbank!');
}
