<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
	<?php
	echo "<body>";
	echo "<body style= 'background-color:" .$_POST["kleur"];
	echo "'>";
	echo "Voornaam is:" .$_POST["Voornaam"] .$_POST["Achternaam"];
	echo "<br>";
	echo "Zit in klas:" .$_POST["Klas"];
	echo "<br>";
	echo "leeftijd is:" .$_POST["Leeftijd"] ."jaar";
	echo "<br>";
	echo "Woont in:" .$_POST["Adres"] .$_POST["Woonplaats"];
	echo "<br>";
	echo "en is een echte " .$_POST["geslacht"];
	echo "</body>"
	?>
</html>