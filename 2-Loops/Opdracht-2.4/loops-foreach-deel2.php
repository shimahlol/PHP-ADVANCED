<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form name="klassenformulier.php">
		<label for="klas">ik zit in klas:</label>
	<select>
		<?php
		$klassen = array("8A", "8B", "8C", "8D", "9A", "9B", "9C", "9D", "9E");
		foreach ($klassen as $klas) {
			?>
		<option><?php echo $klas ?> </option>
		<?php } ?>
	</select>
	<input type="submit" name="submit" value="submit">
		</form>
</body>
</html>