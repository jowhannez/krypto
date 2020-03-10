<?php 
  include "valutaer.php";   
  if ( isset ($_REQUEST['visEnkeltKnapp']) ) {
    $ticker = $_REQUEST['valgtValuta'];
    print "Siste kurs for $ticker: " . $v2[$ticker]['k3'];
  } elseif ( isset ($_REQUEST['visFlereKnapp']) ) {
    if ( !isset ( $_REQUEST['valutaer']) ) {
      print "ingen valgt valuta";
    } else {
      foreach ($_REQUEST['valutaer'] as $k => $ticker) {
        print "Sist kjente kurs for $ticker: " . $v2[$ticker]['k3'] . "<br>";
      }
    }
  } else {
    print "<FORM ACTION=''>\n";
    print "  <SELECT NAME='valgtValuta'>\n";
    foreach ($v2 as $ticker => $v) 
      print "<OPTION VALUE='$ticker'>$ticker $v[navn] </OPTION>\n";
    print "  </SELECT>\n";
    print "  <INPUT TYPE='submit' NAME='visEnkeltKnapp'
                                  VALUE='Vis enkeltvaluta'>\n";
    print "</FORM>\n";

    print "<FORM>\n";
    foreach ($v2 as $ticker => $v) {
      print "    <INPUT TYPE='checkbox' NAME='valutaer[]' VALUE='$ticker'>\n";
      print $ticker . " " . $v['navn'] . "<br>\n";
    }
    print "  <INPUT TYPE='submit' NAME='visFlereKnapp'
                                  VALUE='Vis valgte valutaer'>\n";
    print "</FORM>\n";
  }
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
        echo $valuta["k3"] ."<br />";
        echo "</p>";
      }
    } 
  }
?>