<?php

session_start();

if (! $_SESSION['user']) {
	header("Location: /login.php");
	return;
}

$user = unserialize($_SESSION['user']);
?>


<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <title>Internation Business School</title>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  	<link rel="stylesheet" type="text/css" media="screen" href="css/styles.css">
  	<link rel="php" href="index.php">
  </head>
  <body>
    <div>
        <div>
          <nav class="flex items-center justify-between flex-wrap p-4">
            <div>
              <img src="img/logo.svg" class="fill-current h-6" >
            </div>
            <div class=" text-xl space-x-10" >
              <form class="inline" action="logout.php" method="post">
                <input type="hidden" name="logout" value="1">
                <button type="submit" class="appearance-none font-bold border-r-4" style="color: #6D6D6D;">Abmelden</button>
              </form>
              <a href="Startseite.php" class="font-bold border-r-4"style="color: #6D6D6D;"> Startseite  </a>
              <a href="Tests.php" class="font-bold border-r-4"style="color: #6D6D6D;"> Tests  </a>
              <a href="Hausaufgaben.php" class="font-bold border-r-4" style="color: #6D6D6D;" >Hausaufgaben  </a>
              <!-- <img src="img/profil.svg" class="fill-current inline"> -->
            </div>
          </nav>
        </div>
        <div class="md:flex">
          <div class="flex-1 text-center px-12 pb-12">
            <h1 class="font-bold" style="color: #6D6D6D;" >Newsletter</h1>
              <div class= "w-full h-12 rounded mt-8 shadow-md p-3" style="background-color: #C4C4C4;">
                  <p>Example Title | Klassname | Kategorie<p>
              </div>
              <div class= "w-full h-12 rounded mt-2 mt-4 shadow-md p-3" style="background-color: #C4C4C4;">
                <p>Example Title | Klassname | Kategorie<p>
              </div>
              <div class= "w-full h-12 rounded mt-2 mt-4 shadow-md p-3" style="background-color: #C4C4C4;">
                <p>Example Title | Klassname | Kategorie<p>
              </div>
              <div class= "w-full h-12 rounded mt-2 mt-4 shadow-md p-3" style="background-color: #C4C4C4;">
                <p>Example Title | Klassname | Kategorie<p>
              </div>
              <div class= "w-full h-12 rounded mt-2 mt-4 shadow-md p-3" style="background-color: #C4C4C4;">
                <p>Example Title | Klassname | Kategorie<p>
              </div>
              <div class= "w-full h-12 rounded mt-2 mt-4 shadow-md p-3" style="background-color: #C4C4C4;">
                <p>Example Title | Klassname | Kategorie<p>
              </div>
              <div class= "w-full h-12 rounded mt-2 mt-4 shadow-md p-3" style="background-color: #C4C4C4;">
                <p>Example Title | Klassname | Kategorie<p>
              </div>
              <div class= "w-full h-12 rounded mt-2 mt-4 shadow-md p-3" style="background-color: #C4C4C4;">
                <p>Example Title | Klassname | Kategorie<p>
              </div>
              <div class= "w-full h-12 rounded mt-2 mt-4 shadow-md p-3" style="background-color: #C4C4C4;">
                <p>Example Title | Klassname | Kategorie<p>
              </div>
              <div class= "w-full h-12 rounded mt-2 mt-4 shadow-md p-3 p-3 " style="background-color: #C4C4C4;">
                <p>Example Title | Klassname | Kategorie<p>
              </div>
              <div class= "w-full h-12 rounded mt-2 mt-4 shadow-md p-3 p-3 " style="background-color: #C4C4C4;">
                <p>Example Title | Klassname | Kategorie<p>
              </div>
          </div>
          <div style="background-color:#77C18C;" class="w-2 ">
          </div>
          <div style=" flex:2" class="flex item-center justify-center">
          <img src="img/Reader.svg">
          </div>
        </div>
      <!-- <div class="text-center mb-8 | md:w-1/2 md:mr-4">
        <img src="img/Stundent.svg" alt="Student">
      </div> -->

    </div>
  </body>
</html>
