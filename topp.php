<?php
	# topp.php
	include "felles.php";
	echo "STANDARD TOPP";
	echo "<div>";
	echo "<br> Velkommen til: " . PROGNAVN;
	echo "</div>";
	echo "<div>";
	echo "Nyheter om kryptovalutaer:";
	include "nyheter.html";
	$filename = "nyheter.html";
	if (file_exists($filename)) {
		echo "Sist oppdatart: ".date ("F d Y H:i:s.", filemtime($filename));
	 
	}
	echo "</div>";
?>