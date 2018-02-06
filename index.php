<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
	main {
		color: white;
		text-align: center;
		padding-top: 300px;
		font-family: arial;
	}

	</style>
</head>
<body>
	<main>
		<h1><?php timeMsg() ?></h1>
	</main>
	<?php
		function timeMsg(){
			date_default_timezone_set("Europe/Amsterdam");
			/*echo date_default_timezone_get() . " " . date("H:i");*/
			$currentHour = date("H");
			$time = date("H:i");

			if ($currentHour < "12") {
				echo "<p>Goede Morgen!</p><p>Het is nu " . $time . "</p>";
				echo "<body style='background: url(backgrounds/morning.png);'>";
			} elseif ($currentHour < "18") {
				echo "<p>Goede Middag!</p><p>Het is nu " . $time . "</p>";
				echo "<body style='background: url(backgrounds/afternoon.png);'>";
			} elseif ($currentHour < "24") {
				echo "<p>Goede Avond!</p><p>Het is nu " . $time . "</p>";
				echo "<body style='background: url(backgrounds/evening.png);'>";
			} elseif ($currentHour < "6") {
				echo "<p>Goede Nacht!</p><p>Het is nu " . $time . "</p>";
				echo "<body style='background: url(backgrounds/night.png);'>";
			}	else {
				echo "No valid Time has been found";
			}
		}		
	?>
</body>
</html>