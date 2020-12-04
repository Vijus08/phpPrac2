<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="virepoint" content="width=device-width, initial-scale=1.0">
	<title>Usando PHP</title>
	<link rel="stylesheet" type="text/css" href="css/p2.css">
</head>
<body>
	<h1>estamos usando php y html</h1>
	<?php
		for ($i=1; $i<10 ; $i++) { 
			echo '<input type="text" name="txtc'.$i.'"id="txtc'.$i.'"placeholder="casilla numero'.$i.'"><br>';
		}
	?>
</body>
</html>