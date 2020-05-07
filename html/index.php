<?php
// Die gestartete Session wird �bertragen somit k�nnen die Variablen �bertragen werden.
session_start();

// Es wird die Variable vom User angeben, damit sp�ter die Variable aufgerufen werden kann.


if (! $_SESSION['user']) {
	header("Location: /login.php");
	return;
}
//login wird der benutzer in der Datenbanke gespeichert dafür wird er serialized das heisst er wird gestringed, Das gestringe Array wird zu einem Arry wieder gemacht mit unserialize.

$user = unserialize($_SESSION['user']);
?>


<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <title>Internation Business School</title>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  	<link rel="stylesheet" type="text/css" media="screen" href="css/styles.css">
  	<link rel="php" href="index.php">
  </head>
  <body>
    <div>
        <div>
          <nav class="md:flex items-center justify-between flex-wrap p-4" x-data="{open: false}" x-cloak>
            <div class="flex items-center justify-between">
              <img src="img/logo.svg" class="fill-current h-3 | md:h-6" >

              <button class="md:hidden text-gray-800" @click="open = !open">
                <svg x-show="! open" class="fill-current h-6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                  <path d="M4 8h16M4 16h16"></path>
                </svg>
                <svg x-show="open" class="fill-current h-6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                  <path d="M6 18L18 6M6 6l12 12"></path>
                </svg>
              </button>
            </div>
            <div class="text-xl mt-4 | md:mt-0" x-show="open || window.innerWidth > 786">
              <form class="w-full | md:w-auto md:inline" action="logout.php" method="post">
                <input type="hidden" name="logout" value="1">
                <button type="submit" class="appearance-none font-bold | md:border-r-4 md:px-5" style="color: #77C18C;">Abmelden</button>
              </form>
              <a href="Startseite.php" class="block font-bold | md:inline md:border-r-4 md:px-5" style="color: #6D6D6D;"> Startseite  </a>
              <a href="Tests.php" class="block font-bold | md:inline md:border-r-4 md:px-5" style="color: #6D6D6D;"> Tests  </a>
              <a href="Hausaufgaben.php" class="block font-bold | md:inline md:px-5" style="color: #6D6D6D;" >Hausaufgaben  </a>
              <!-- <img src="img/profil.svg" class="fill-current inline"> -->
            </div>
          </nav>
        </div>
        <div class="md:flex">
          <div class="flex-1 text-center p-4 | md:px-12 md:pb-12">
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
          <div style=" flex:2" class="flex flex-col item-center justify-center text-center">
            <p class="font-bold mb-8" style="color: #6D6D6D;">Hallo, <?php echo $user['name']; ?>!</p>
            <img src="img/Reader.svg">
          </div>
        </div>
      <!-- <div class="text-center mb-8 | md:w-1/2 md:mr-4">
        <img src="img/Stundent.svg" alt="Student">
      </div> -->

    </div>
  </body>
</html>
