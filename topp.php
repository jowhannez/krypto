<?php
	# topp.php
	include "felles.php";
	echo "STANDARD TOPP";
	echo "<br> Velkommen til: " . PROGNAVN;
	echo "Nyheter om kryptovalutaer:";
	include "nyheter.html";
	$filename = "nyheter.html";
	if (file_exists($filename)) {
		echo "Sist oppdatart: ".date ("F d Y H:i:s.", filemtime($filename));
	 
	}
	echo "<hr>";
	
?>

<div>
	<p>velkommen til programnavn</p>
</div>
<div>
	<p>nyheter om ...</p>
</div>