<?php

require 'db.php';
//Session Start
session_start();
// Guckt ob der Arrayk key der Variable _Session existiert.
if (array_key_exists("user", $_SESSION)) {
	header("Location: /index.php");
	return;
}

// Fehler aus der Session lüschen
unset($_SESSION['error']);

// Login Eingabe sowie Passwort überprüfung.
if (array_key_exists("username", $_POST) && array_key_exists("password", $_POST)) {
	$user = $_POST['username'];
	$password = $_POST['password'];
// Datenbank abfrage auf einträge
	$stmt = $db->prepare("select * from users where username = ?");
	$stmt->bind_param("s", $user);
	$stmt->execute();
	$result = $stmt->get_result();
	$data = $result->fetch_assoc();

//überprüfung des Passwortes, ist der hash übereinstimmmed wie mit dem in der Datenbank.
	if ($data > 0) {
		if (password_verify($password, $data['password'])) {
			$_SESSION['user'] = serialize($data);
			header("Location: /index.php");
			return;
			// Falsches Passwort wenn ArrayKey "Error"
		} else {
			$_SESSION['error'] = "Falscher Benutzername oder Passwort";
		}
	} else {
		$_SESSION['error'] = "Falscher Benutzername oder Passwort";
	}
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
	<title>Internation Business School</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" media="screen" href="css/styles.css">
	<link rel="php" href="index.php">
</head>

<body class="bg-cover bg-center min-h-screen min-w-screen p-8" style="background-image: url(img/study.jfif)">
	<div class="bg-white max-w-4xl mx-auto rounded-lg shadow-2xl p-4 | md:flex md:p-16 md:pb-4">
		<div class="text-center | md:w-1/2 md:mr-4">
			<img src="img/Stundent.svg" alt="Student">
		</div>
		<div class="mt-4 text-center text-gray-800 | md:w-1/2 md:ml-4 md:mt-0">
			<form action="login.php" method="post">
				<p class="LoginText font-black text-xl">Stundent Login<p>

				<div class="relative mt-6">
					<svg class="w-4 h-4 absolute bottom-0 left-0 my-auto mx-8 top-0" fill="currentColor" viewBox="0 0 20 20"><path d="M14.243 5.757a6 6 0 10-.986 9.284 1 1 0 111.087 1.678A8 8 0 1118 10a3 3 0 01-4.8 2.401A4 4 0 1114 10a1 1 0 102 0c0-1.537-.586-3.07-1.757-4.243zM12 10a2 2 0 10-4 0 2 2 0 004 0z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
					<!-- <img src="img/Letter.svg" class="absolute bottom-0 left-0 my-auto px-8 top-0"> -->

					<input type="text" name="username" class="w-full rounded-full pl-16 pr-6 py-3 outline-none focus:shadow-outline" placeholder="Email" style="background: #E5E5E5">
				</div>

				<div class="relative mt-4">
					<svg class="w-4 h-4 absolute bottom-0 left-0 my-auto mx-8 top-0" fill="currentColor" viewBox="0 0 20 20"><path d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>

					<input type="password" name="password" class="w-full rounded-full pl-16 pr-6 py-3 outline-none focus:shadow-outline" placeholder="Password" style="background: #E5E5E5">
				</div>

				<div class="mt-4">
					<button class="w-full font-bold rounded-full text-white px-6 py-3 outline-none focus:shadow-outline" style="background: #77C18C">Login</button>
				</div>

				<?php if (array_key_exists("error", $_SESSION)): ?>
					<div class="mt-4">
						<div class="w-full rounded-full text-white outline-none focus:shadow-outline bg-red-500 text-sm font-semibild py-2">
							<p><?php echo $_SESSION['error']; ?></p>
						</div>
					</div>
				<?php endif; ?>

				<div class="mt-2">
					<a class="text-sm" href="#">Vergessen <span class="text-gray-700 font-bold">Username / Password</span></a>
				</div>

				<div class="mt-6 | md:mt-24">
					<p class="font-medium">Technischer Dienst: <a href="tel:+410765670740">+41 076 567 07 40</a></p>
				</div>
			</form>
		</div>
	</div>
</body>
</html>
