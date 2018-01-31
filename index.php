
<!DOCTYPE html>
<html>
<head>
	<title>goeie morguh</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="goede-php.css">
</head>
<body>
	<?php 
 date_default_timezone_set ("Europe/Amsterdam");
   $time=date("H");
 if ($time >= "6" && $time < "12") {
  echo "<p id='groet'>Goede Morgen!</p> <img src='backgrounds/morning.png'><p id='tijd'>Het is nu: " . date("H:i") . "</p>";
  }if ($time >= "12" && $time < "18") {
  echo "<p id='groet'>Goede Middag!</p> <img src='backgrounds/afternoon.png'><p id='tijd'>Het is nu: " . date("H:i") . "</p>";
   }if ($time >= "18" && $time <= "23") {
  echo "<p id='groet'>Goede Avond!</p> <img src='backgrounds/evening.png'><p id='tijd'>Het is nu: " . date("H:i") . "</p>";
   }if ($time <= "6") {
  echo "<p id='groet'>Goede Nacht!</p> <img src='backgrounds/night.png'><p id='tijd'>Het is nu: " . date("H:i") . "</p>";
            }
	 ?>
</body>
</html>