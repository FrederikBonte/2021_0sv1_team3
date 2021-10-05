<?php
$url = $_GET['url'];
if ($url=="contact") {
	echo'<form method="get" action="">
Naam: <input type="text" name="naam"><br>
Achternaam: <input type="text" name="achternaam"><br>
<input type="submit" value="versturen">
</form>';
}
else if($url=="home"){
	echo "Welkom op mijn webpagina";
}
else if($url=="Over ons"){
	echo "Wij zijn de beste software developers";
}
?>
