<?php
	# topp.php
	include "felles.php";
	echo "STANDARD TOPP";
	echo "<br> Programmets navn er: " . PROGNAVN;
	echo "Nyheter om kryptovalutaer:";
	include "nyheter.html";
	$filename = "nyheter.html";
if (file_exists($filename)) {
    echo "$filename " . 
}
	echo "Sist oppdatart: ".date ("F d Y H:i:s.", filemtime($filename));; 
	echo "<hr>";
	
?>