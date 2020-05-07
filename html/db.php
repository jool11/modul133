<?php

$db = mysqli_connect("127.0.0.1", "root", "", "login");

if (! $db) {
	die('Fehler beim Verbinden mit der Datenbank!');
}
