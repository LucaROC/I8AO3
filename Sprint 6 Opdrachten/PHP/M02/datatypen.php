<?php
/** Opgave 1 */
 $naam = "Carl";
 $straat = "Kruislaan 111";
 $woonplaats = "Utrecht";

 /** Opgave 2 */
 $naw = $naam . " " . $straat . " " . $woonplaats;
 echo "Gegevens: $naw";

 /** Opgave 3 */
 echo <<<TEKST
 <BR>Salarisspecificatie van $naam: 2000 euro
 <BR>Maand: November
 <BR>Jaar: 2020
TEKST;

 /** Opgave 4 */
 $dollars = 999.99;
 $koers = 1.2;
 $euros = $dollars * $koers;
 echo "<br>Bedrag in euro's is: $euros";

 ?>