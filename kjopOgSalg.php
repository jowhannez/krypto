<html>
<body>
<?php
include "topp.php";
# Her har du en formel der du kan forandre $antall for å finne pris.
$antall 	 = 2;
$bitcoinkurs = 76943;
$dollarkurs  = 0.11;

$totalCostNOK = $antall * $bitcoinkurs;
$totalCostUSD = $totalCostNOK * $dollarkurs;
echo("Ikke implementert enda. Det eneste vi vet er at hvis du handler {$antall} bitcoin til en verdi av {$bitcoinkurs} norske kroner per bitcoin, vil det koste deg: {$totalCostNOK} norske kroner, som i amerikanske dollar blir {$totalCostUSD}")
?>
</body>
</html>