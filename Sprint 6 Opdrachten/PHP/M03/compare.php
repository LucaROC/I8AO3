<?php

$getal1 = mt_rand(1, 1000);
$getal2 = mt_rand(1, 1000);

/* Comparision 1 */
echo <<<COMPARE
<br>$getal1 > $getal2 = 
COMPARE;
echo ($getal1 > $getal2 ? 'true' : 'false');

/* Comparision 2 */
echo <<<COMPARE
<br>$getal1 < $getal2 = 
COMPARE;
echo ($getal1 < $getal2 ? 'true' : 'false');

/* Comparision 3 */
echo <<<COMPARE
<br>$getal1 == $getal2 = 
COMPARE;
echo ($getal1 == $getal2 ? 'true' : 'false');

/* Comparision 4 */
echo <<<COMPARE
<br>$getal1 === $getal2 = 
COMPARE;
echo ($getal1 === $getal2 ? 'true' : 'false');

/* Comparision 5 */
echo <<<COMPARE
<br>$getal1 >= $getal2 = 
COMPARE;
echo ($getal1 >= $getal2 ? 'true' : 'false');

/* Comparision 6 */
echo <<<COMPARE
<br>$getal1 <= $getal2 = 
COMPARE;
echo ($getal1 <= $getal2 ? 'true' : 'false');

/* Comparision 7 */
echo <<<COMPARE
<br>$getal1 != $getal2 = 
COMPARE;
echo ($getal1 != $getal2 ? 'true' : 'false');



