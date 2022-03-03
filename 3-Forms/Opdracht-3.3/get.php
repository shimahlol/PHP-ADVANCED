<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
// http://localhost/BLOK4/PHP-ADVANCED/3-Forms/Opdracht-3.3/get.php?artiest=littlesimz&jaar=1995&titel=venom&genre=horror
	echo "favo Artiest is " .$_GET["artiest"];
	echo "komt uit" .$_GET["jaar"];
	echo "De titel is" .$_GET["titel"];
	echo "en de genre is" .$_GET["genre"]
	?>
</body>
</html>