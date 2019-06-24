<?php
$gewerkteuren = 45;
$uurtarief = 15.00;
$bonus = 100.00;
$bruto = $gewerkteuren * $uurtarief;
$netto = $bruto - (0.4 * $bruto);

if ($gewerkteuren <= 40){
    echo "Uw basissalaris is: €".$bruto;
    echo "<br>Uw belasting is: €". 0.4 * $bruto;
    echo "<br>Uw nettobedrag is: €". $netto;
}
elseif ($gewerkteuren > 40) {
    echo "Uw basissalaris is: €".$bruto;
    echo "<br>Uw basissalaris plus bonus is: €". ($bruto + $bonus);
    echo "<br>Uw belasting is: €". 0.45 * ($bruto + $bonus);
}


