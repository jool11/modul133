<?php

$db = new mysqli("127.0.0.1", "root", "", "login");

if ($db->connect_errno) {
	die('Fehler beim Verbinden mit der Datenbank!');
}
