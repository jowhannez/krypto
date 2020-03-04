<style>
	.container {
		display: flex;
	}
	.block {
		width: 50%;
		padding: 10px;
		border: solid 1px black;
	}
	.block__left {
		border-right: none;
	}
</style>

<?php
	# topp.php
	include "felles.php";
	echo "<section class='container'>";
		echo "<div class='block block__left'>";
			echo "<div>Velkommen til: " . PROGNAVN . "</div>";
		echo "</div>";
		echo "<div class='block'>";
			echo "Nyheter om kryptovalutaer:";
			include "nyheter.html";
			$filename = "nyheter.html";
			if (file_exists($filename)) {
				echo "Sist oppdatart: ".date ("F d Y H:i:s.", filemtime($filename));
			}
		echo "</div>";
	echo "</section>";
?>