<?php
if (is_int(strpos ($ticker, $letetekst)) or is_int(strpos ($v2[$ticker]['navn'], $letetekst)) {
   
} else {
  foreach ($v2 as $tickernavn => $valuta) {
    $letetekst = $_GET['letetekst'];
    $posisjonnavn = strpos($valuta['navn'], $letetekst);
    $posisjonticker = strpos($tickernavn, $letetekst);
    echo "<br> Posisjon navn: $posisjonnavn, posisjon ticker: $posisjonticker";
    echo "<p>";
    
    if ($posisjonnavn >= "0" or $posisjonticker >= "0") { 
      echo $valuta['navn'];
      echo " (";
      echo $tickernavn;
      echo "), hvor sist kjente kurs er: ";
      echo $valuta["k3"] ."<br/>";
      echo "</p>";
    }
	} 
}
?>